<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions


function redirect($url)
{
    if (!headers_sent())
    {
        header('Location: '.$url);
        exit;
    }
    else
    {
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.sendgrid.net';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'apikey';                     //SMTP username
    $mail->Password   = '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';                               //SMTP password
    $mail->SMTPSecure = 'ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    $email = $_POST['email'];
    $type = $_POST['type'];
    $message = $_POST['message'];

    //Recipients
    $mail->setFrom('connect@wooble.org', 'Wooble');
    $mail->addAddress($email, $name);     //Add a recipient

    $postdata = http_build_query(
        array(
            'name' =>  $name ,'type'=>'type', 'message' => $message
        )
    );

    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-Type: application/x-www-form-urlencoded',
            'content' => $postdata
        )
    );

    $context  = stream_context_create($opts);

    $result = file_get_contents('../emailTemplate/sendEmail.php', false, $context);
//    $custom_result = $result.replace('####Name####',$name);
    $custom_result = str_replace("####Name####",$name,$result);
    $custom_result = str_replace("####Name####",$type,$result);
    $custom_result = str_replace("####Message####",$message,$result);

    $body = $custom_result;



    //Content
    $mail->isHTML(true);//Set email format to HTML
    $mail->Subject = 'Your request has been accepted';
    $mail->Body    =  $body;
    $mail->AltBody = 'Your request has been accepted Now..';

    $mail->send();
//    header("Location: ../onboarding/profession.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//    redirect('fail.php?id='.$email);
}