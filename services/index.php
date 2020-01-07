<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Моя Москва</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="main">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                </div>

                <div class="navbar-collapse collapse">
                    <a class="navbar-brand" id="MyMoscow" href="#"><img id ="navbar-logotype" src="icons/spasskaya-tower.png" alt="">MyMoscow</a>
                        <ul class="nav navbar-nav navbar-right">
                        <li><a id="main" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/index.php">Главная</a></li>
                        <li><a id="work" href="#">Наши услуги</a></li>
                        <li><a id="about" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/index.php">О компании</a></li>
                        <li><a id="contact" href="#">Контакты</a></li>
                        <li><a id="feedback" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/index.php">Отзывы</a></li>
                    </ul>
                </div>
            </div>
        </div>
                <div class="slider"> 
                <div class="slider-item"></div>
                    <div class="slider-item"></div>
                    <div class="slider-item"></div>
                    </div>
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12 ">
                        <h1>Необычная Москва</h1>
                        <h2>MyMoscow - агенство интересных маршрутов</h2>
                    </div>
                    <div id="buttons">
                        <button type="button" id="moreabout">ПЕШИЕ</button>
                        <button type="button" id="moreabout"><a href="river/index.html">АВТОБУСНЫЕ</a></button>
                        <button type="button" id="moreabout"><a href="river/index.html">РЕЧНЫЕ</a></button>
                        <button type="button" id="moreabout">НОЧНЫЕ</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container info" id="aboutus">
            <div class="row">
                <p id="p1">Москву не посмотреть за один день. Поражает многообразие достопримечательностей и исторических достояний. Здесь находятся самые знаменитые музеи, театры, церкви, выставочные центры и многие другие.</p>
                <p id="p2">Все самые известные экскурсии по Москве собраны в данном разделе. Заказать любую можно на сайте, заполнив форму заказа, обязательно присутствующую на каждой экскурсии.</p>
                <p id="p3">Выбирайте для себя автобусные, пешие, речные, гастрономические и другие самые популярные туры. Изучайте старые тайны Московского метрополитена, наслаждайтесь красотами великой столицы и прокладывайте новые маршруты вместе.</p>
            </div>

        <div class="photo">    
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="image-box">
                        <a href="river/index.html"><img class="image-box__item" src="img/4.jpg" alt=""></a>
                    </div>
                </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="image-box">
                            <img class="image-box__item" src="img/3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="image-box">
                                <img class="image-box__item" src="img/2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="image-box">
                                <img class="image-box__item" src="img/1.jpg" alt="">
                            </div>
                        </div>
        </div>
    </div>
                <div class="container-fluid footer">
                                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2"></div>
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4" id="contact1">
                                        <a class="navbar-brand" id="MyMoscow" href="#"><img id ="navbar-logotype" src="icons/spasskaya-tower.png" alt="">MyMoscow</a>
                                        <p id="contacttext"><br></br>Мы приглашаем тебя на самые разные экскурсии по Москве. Автобусные и пешеходные на целый день или с заходов в здания - у нас в ассортименте более 20 авторских экскурсий по Москве, выбирай и узнавай Москву вместе с нами!</p>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4" id="contact2">
                                        <h9 id="contactid">Контакты</h9><br></br>
                                        <img class="logot" src="icons/placeholder.png" width="20" height="20">Москва, Большая Спасская 12<br></br>
                                        <img class="logot" src="icons/mail.png" width="20" height="20">kait2004@mail.ru<br></br>
                                        <img class="logot" src="icons/telephone.png" width="20" height="20">8(977)487-43-86
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2"></div>
                </div>

                    
                
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./script.js"></script>
    </body>
</html>