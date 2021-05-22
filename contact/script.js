function validation() {
  const form = document.getElementById("myform");
  const username = document.getElementById("username");
  const email = document.getElementById("email");
  const message = document.getElementById("message");

  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const messageValue = message.value.trim();
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  //name validation
  if (usernameValue === "") {
    const formControl = username.parentElement; // .form-control
    const small = formControl.querySelector("small");
    //add error message inside the small tag
    small.innerText = "Name can not be blank";
    //add error class
    formControl.className = "form-controls error";
    return false;
  } else {
    const formControl = username.parentElement;
    formControl.className = "form-controls success";
  }

  //email validation
  if (emailValue === "") {
    const formControl = email.parentElement; // .form-control
    const small = formControl.querySelector("small");
    //add error message inside the small tag
    small.innerText = "email can not be blank";
    //add error class
    formControl.className = "form-controls error";
    return false;
  } else if (emailValue.indexOf("@") == -1) {
    const formControl = email.parentElement; // .form-control
    const small = formControl.querySelector("small");
    //add error message inside the small tag
    small.innerText = "@ is missing";
    //add error class
    formControl.className = "form-controls error";
    return false;
  } else if (!re.test(String(emailValue).toLowerCase())) {
    const formControl = email.parentElement; // .form-control
    const small = formControl.querySelector("small");
    //add error message inside the small tag
    small.innerText = "Email is not valid";
    //add error class
    formControl.className = "form-controls error";
    return false;
  } else {
    const formControl = email.parentElement;
    formControl.className = "form-controls success";
  }

  //message validation
  if (messageValue === "") {
    const formControl = message.parentElement; // .form-control
    const small = formControl.querySelector("small");
    //add error message inside the small tag
    small.innerText = "message can not be blank";
    //add error class
    formControl.className = "form-controls error";
    return false;
  } else {
    const formControl = message.parentElement;
    formControl.className = "form-controls success";
  }

  return true;
}
