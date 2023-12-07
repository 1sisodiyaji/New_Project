
function sendEmail() {
    const email = document.querySelector('#email').value;
    const type = document.querySelector('#exampleFormControlSelect1').value;
    const message = document.querySelector('#exampleFormControlTextarea1').value;
    const notice = document.querySelector('.error-message');

    if(email === ""){
        notice.textContent= "Please Enter Your Email..";
    } else if( type === ""){
        notice.textContent = "Please Enter the Type Of Problem";
    }else if( message === ""){
        notice.textContent = "Please Enter the Your Problem briefly..";
    }else {
        $.ajax({
            url: '../PHPMailer/index.php',
            method: 'POST',
            data: {
                email: email,
                type: type,
                message: message
            },
            success: function (response) {
                console.log("Email Send");
            }
        });
    }
}

