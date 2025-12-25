const userName = document.querySelector(".userName");
const email = document.querySelector(".email");
const license = document.querySelector(".license");
const password = document.querySelector(".password");
const passwordRepit = document.querySelector(".passwordRepit");
const password_check = document.querySelector(".password__check");
const passwordRepit__check = document.querySelector(".passwordRepit__check");
const singup__btn = document.querySelector(".main__contents__singup__elements__btn");
const singin__btn = document.querySelector(".main__contents__singin__elements__btn");

function password_type(ps, ps_ch){
    if(ps.type == "text"){
        ps.type = "password"
        ps_ch.src = '/img/icon/eye-crossed.svg'
    }else{
        ps.type = "text"
        ps_ch.src = '/img/icon/eye.svg'
    }
}

function singup_validate(){
    if(userName.value.length <= 3){
        userName.classList.add('input__error');
        alert('username litel');
    }else{
        userName.classList.remove('input__error');
        if(email.value.length < 13 || email.value.message.include('@gmail.com') || email.value.message.include('@email.com')){
            email.classList.add('input__error');
        }else{
            email.classList.remove('input__error');
        }
    }
};

singup__btn.addEventListener('click', ()=>{singup_validate()});
password_check.addEventListener('click', ()=>{password_type(password, password_check)});
passwordRepit__check.addEventListener('click', ()=>{password_type(passwordRepit, passwordRepit__check)});