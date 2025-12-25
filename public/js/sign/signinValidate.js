const userName = document.querySelector(".userName");
const email = document.querySelector(".email");
const password = document.querySelector(".password");
const password_check = document.querySelector(".password__check");
const signin__btn = document.querySelector(".main__contents__signin__elements__btn");
const EMAIL_REGEXP = /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;

function signin_validate(){
    if(userName.value.length <= 3){
        userName.classList.add('input__error');
    }else{
        userName.classList.remove('input__error');
    }
    if(email.value.length <= 3 || !(EMAIL_REGEXP.test(email.value))){
        email.classList.add('input__error');
    }else{
        email.classList.remove('input__error');
    }
    if(password.value.length < 6){
        password.classList.add('input__error');
    }else{
        password.classList.remove('input__error');
    }
};

function password_type(ps, ps_ch){
    if(ps.type == "text"){
        ps.type = "password"
        ps_ch.src = '/img/icon/eye-crossed.svg'
    }else{
        ps.type = "text"
        ps_ch.src = '/img/icon/eye.svg'
    }
}

password_check.addEventListener('click', ()=>{password_type(password, password_check)});
signin__btn.addEventListener('click', ()=>{signin_validate()});