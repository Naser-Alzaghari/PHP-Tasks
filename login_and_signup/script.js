const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
const registerd_successfully_msg = document.getElementById("registerd_successfully");
const input_password = document.querySelector("input#password");
const confirm_password = document.querySelector("input#confirm_password");
const password_doesnot_match_msg = document.getElementById('password_doesnot_match');
const password_requirment_msg = document.getElementById("password_requirment");
const email = document.querySelector(`input[type="email"]`);
const email_requirment_msg = document.getElementById("email_requirment");

signupBtn.onclick = (()=>{
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
});
signupLink.onclick = (()=>{
  signupBtn.click();
  return false;
});
function email_requirment(){
    email_requirment_msg.classList.remove("d-none");
    email.classList.remove("mb-3");
}
function registerd_successfully(){
    password_requirment_msg.classList.add("d-none");
    password_doesnot_match_msg.classList.add("d-none");
    registerd_successfully_msg.classList.remove("d-none");
}

function password_doesnot_match(){
    password_requirment_msg.classList.add("d-none");
    registerd_successfully_msg.classList.add("d-none");
    password_doesnot_match_msg.classList.remove("d-none");
}
function password_requirment(){
    registerd_successfully_msg.classList.add("d-none");
    password_doesnot_match_msg.classList.add("d-none");
    password_requirment_msg.classList.remove("d-none");
}

document.querySelector(`form[action="signup.php"]`).addEventListener("submit", (e)=>{
    if(email.value.match("[A-Za-z0-9\._%+\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z]{2,}")){
        email_requirment_msg.classList.add("d-none");
        email.classList.add("mb-3");
    if (input_password.value.match("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}$")){
        if(input_password.value == confirm_password.value){
            password_requirment_msg.classList.add("d-none");
            password_doesnot_match_msg.classList.add("d-none");
            
            
        } else {
            password_doesnot_match();
            e.preventDefault();
        }
    } else {
        password_requirment();
        e.preventDefault();

    }
} else {
    email_requirment();
    e.preventDefault();

}
});

