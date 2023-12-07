const email = document.getElementById('loginName');
// first check weather the email id is registered or not

const pass = document.getElementById('loginPassword');

const message = document.getElementById('message');
function Login(){
    if(!email){
        message.textContent="Please Enter the email first !";
    }
    else if(!pass){
        message.textContent="Please Enter the password";
    }
    else{
        $.ajax{

        }
    }
  
}