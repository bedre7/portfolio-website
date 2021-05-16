const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const message = document.getElementById('message');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();
});

function checkInputs(){
    //get the values from the inputs

    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const messageValue = message.value.trim();

    //name validation
    if(usernameValue === ''){
        setErrorFor(username, 'Name can not be blank');
    }else{
        setSuccessFor(username);
    }
    //email validation
    if(emailValue === ''){
        setErrorFor(email, 'Email can not be blank');
    }else if(!isEmail(emailValue)){
        setErrorFor(email, 'Email is not valid');
    }else{
        setSuccessFor(email);
    }
    //message validation
    if(messageValue === ''){
        setErrorFor(message, 'Message can not be blank');
        return;
    }else{
        setSuccessFor(message);
    }

    //showing success
   // alert("Form submitted successfully!");
    
    //confirm();
    this.submit();
}
function setErrorFor(input, message){
    const formControl = input.parentElement;// .form-control
    const small = formControl.querySelector('small');

    //add error messafe inside the small tag

    small.innerText = message;

    //add error class
    formControl.className = 'form-control error';
}

function setSuccessFor(input){
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function isEmail(email){
    //checks if the email is in the correct format 
    //for example: ****@gmail.com
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
function confirm(){
    nameC.innerText = usernameValue;
    emailC.innerText = emailValue;
    messageC.innerText = messageValue;
}