<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='{{asset("img/icon/logo.ico")}}'>
    <link rel="stylesheet" href='{{asset("css/index.css")}}'>
    <title>Home</title>
</head>
<body>
    <div class="gradient background"></div>
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
    <main>
        <div class="main__contents">
            <div class="main__contents__left"></div>
            <div class="main__contents__right"></div>
        </div>
    </main>
    <img src='{{asset("img/animation/dance.gif")}}' class="anime__dance">
    <button class="anime__dance__btn"></button>
    <script src='{{asset("js/index.js")}}'></script>
</body>
</html>