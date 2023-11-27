import Toastify from 'toastify-js';

function sendEmail() {
    const email = document.querySelector('#email').value;
    const type = document.querySelector('#exampleFormControlSelect1').value;
    const message = document.querySelector('#exampleFormControlTextarea1').value;

    fetch('/send-email', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ email, type, message }),
    })
    .then(response => response.text())
    .then(result => {
        showToast(result);
    })
    .catch(error => {
        console.error('Error sending email:', error);
        showToast('Error sending email');
    });

}   
    function showToast(message) {
        Toastify({
            text: message,
            duration: 3000, // 3 seconds
            close: true,
            gravity: 'top', // 'top' or 'bottom'
            position: 'right', // 'left', 'center', 'right', or 'full'
            backgroundColor: 'linear-gradient(90deg, rgba(44,70,82,1) 0%, rgba(171,217,194,1) 77%)',
        }).showToast();
}

