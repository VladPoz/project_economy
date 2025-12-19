<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='{{asset("css/index.css")}}'>
    <title>Home</title>
</head>
<body>
    <header class='header'>
        <div class="header__contents">
            <div class="header__contents__elements">
                <ul class="header__contents__elements__ul">
                    <a href="/"><li class="header__contents__elements__li"><img class="icon" src='{{asset("img/icon/home.svg")}}'>Home</li></a>
                    <a href="/input"><li class="header__contents__elements__li"><img class="icon" src='{{asset("img/icon/edit.svg")}}'>Input</li></a>
                    <a href="/report"><li class="header__contents__elements__li"><img class="icon" src='{{asset("img/icon/calendar-lines-pen.svg")}}'>Report</li></a>
                    <a href="/hz"><li class="header__contents__elements__li"><img class="icon" src='{{asset("img/icon/chart-histogram.svg")}}'>Hz</li></a>
                </ul>
            </div>
            <div class="header__contents__log">
                <a href="/singup"><button class="header__contents__log__element btn"><img class="icon" src='{{asset("img/icon/user.svg")}}'>Profile</button></a>
            </div>
        </div>
    </header>
</body>
</html>