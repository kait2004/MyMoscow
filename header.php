<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Моя Москва</title>
        <link rel="stylesheet" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/css/bootstrap.css">
        <link rel="stylesheet" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/css/style.css">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse">
                    <a class="navbar-brand" id="MyMoscow" href="#"><img id ="navbar-logotype" src="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/icon/spasskaya-tower.png" alt="">MyMoscow</a>
                        <ul class="nav navbar-nav navbar-right">
                        <li><a id="main" href="#">Главная</a></li>
                        <li><a id="work" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/services/index.php">Наши услуги</a></li>
                        <li><a id="about" href="#">О компании</a></li>
                        <li><a id="contact" href="#">Контакты</a></li>
                        <li><a id="feedback" href="#">Отзывы</a></li>
                    </ul>
                </div>
            </div>
        </div>