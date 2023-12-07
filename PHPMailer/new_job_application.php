<?php
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
    }
    else
    {
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>';
    }
    exit;
}


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'support@mccapp.co.in';                     //SMTP username
    $mail->Password   = 'Jh05ax-2586';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    $email = $_POST['candidate_email'];
    $job_title = $_POST['job_title'];
    $application_id = $_POST['applied_id'];
    $timestamp = strtotime("now");
    //Recipients
    $mail->setFrom('support@mccapp.co.in', 'MCC Support');
    $mail->addAddress($email);     //Add a recipient
    //$mail->addBCC("teamhitech1@gmail.com", "Monitor mail");




    $body =
        '<b>Thank you for applying for the job opening: '.$job_title.'. Your application ID is: '.$application_id.'</b>
    <p> We will keep you updated. You can also check the status in the app by clickling on applied jobs -> Show Status. </p>
    <br>
   
    <p>Thanks & Regards<br>
    MCC - A joint Initiative By Tata Steel Foundation & CII</p>';



    //Content
    $mail->isHTML(true);//Set email format to HTML
    $mail->Subject = 'Job Update | '.$job_title.' | MCC APP';
    $mail->Body    =  $body;
    $mail->AltBody = 'Job Update || MCC APP';

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: $mail->ErrorInfo";
    redirect('fail.php?id='.$email);
}
