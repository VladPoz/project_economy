<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='{{asset("img/icon/logo.ico")}}'>
    <link rel="stylesheet" href='{{asset("css/index.css")}}'>
    <title>sign Up</title>
</head>
<body>
    <div class="gradient background"></div>
    <!-- Форма header -->
    <header class='header'>
        <div class="header__contents">
            <div class="header__contents__elements">
                <ul class="header__contents__elements__ul">
                    <a href="/"><li class="header__contents__elements__li"><img class="icon" src='{{asset("img/icon/home.svg")}}'>Home</li></a>
                    <a href="/input"><li class="header__contents__elements__li"><img class="icon" src='{{asset("img/icon/edit.svg")}}'>Input</li></a>
                    <a href="/report"><li class="header__contents__elements__li"><img class="icon" src='{{asset("img/icon/calendar-lines-pen.svg")}}'>Report</li></a>
                    <a href="/analysis"><li class="header__contents__elements__li"><img class="icon" src='{{asset("img/icon/chart-histogram.svg")}}'>Analysis</li></a>
                </ul>
            </div>
            <div class="header__contents__sign">
                <a href="/profile"><button class="header__contents__sign__element btn"><img class="icon" src='{{asset("img/icon/user.svg")}}'>Profile</button></a>
            </div>
        </div>
    </header>
    <!-- Форма main -->
    <main>
        <!-- <form method="POST"> -->
            <div class="main__contents">
                <div class="main__contents__left"></div>
                <div class="main__contents__right">
                    <div class="main__contents__sign">
                        <div class="main__contents__sign__elements">
                            <input type="text" name="userName" placeholder="username" maxlength="14" class="main__contents__sign__elements__input userName">
                            <img class="main__contents__sign__elements__icon" src='{{asset("img/icon/user.svg")}}'>
                        </div>
                        <div class="main__contents__sign__elements">
                            <input type="email" name="email" placeholder="email" maxlength="32" class="main__contents__sign__elements__input email">
                            <img class="main__contents__sign__elements__icon" src='{{asset("img/icon/at.svg")}}'>
                        </div>
                        <div class="main__contents__sign__elements">
                            <input type="password" name="password" placeholder="password" maxlength="14" class="main__contents__sign__elements__input password">
                            <img class="main__contents__sign__elements__icon password__check" src='{{asset("img/icon/eye-crossed.svg")}}'>
                        </div>
                        <div class="main__contents__sign__elements">
                            <input type="password" name="passwordRepeat" placeholder="password repeat" maxlength="14" class="main__contents__sign__elements__input passwordRepeat">
                            <img class="main__contents__sign__elements__icon passwordRepeat__check" src='{{asset("img/icon/eye-crossed.svg")}}'>
                        </div>
                        <div class="main__contents__sign__elements">
                            <span class="main__contents__sign__elements__license">I accept the <a class="main__contents__sign__elements__license" href="/licens"><b>license agreement</a></b> | <input type="checkbox" class="license"></span>
                        </div>
                        <div class="main__contents__sign__elements">
                            <button class="main__contents__signup__elements__btn btn">Sign Up</button>
                        </div>
                        <div class="main__contents__sign__elements">
                            <span class="main__contents__sign__elements__signup">I have an account | <a class="main__contents__sign__elements__signup" href='/signin'><b>sign In</b></a></span>
                        </div>
                    </div>
                </div>
            </div>
        <!-- <form> -->
    </main>
    <img src='{{asset("img/animation/dance.gif")}}' class="anime__dance">
    <button class="anime__dance__btn"></button>
    <!-- Подключение js файлов -->
    <script src='{{asset("js/index.js")}}'></script>
    <script src='{{asset("js/sign/signupValidate.js")}}'></script>
</body>
</html>