<?php
    use application\models\UserLogin;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Тестовое задание</title>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
        <link href="http://<?= $_SERVER['SERVER_NAME'] ?>/test_bwt/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="http://<?= $_SERVER['SERVER_NAME'] ?>/test_bwt/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css"/>
        <link href="http://<?= $_SERVER['SERVER_NAME'] ?>/test_bwt/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="http://<?= $_SERVER['SERVER_NAME'] ?>/test_bwt/css/style.css"  />
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav menu">
                        <li><a href="/test_bwt/">Главная</a></li>
                        <?php if(UserLogin::isGuest()):?>
                        <li><a href="/test_bwt/user/registration">Регистрация</a></li>
                        <?php endif;?>
                        <li><a href="/test_bwt/feedback/add">Форма обратной связи</a></li>
                        <?php if(!UserLogin::isGuest()): ?>
                        <li><a href="/test_bwt/weather">Погода</a></li> 
                        <li><a href="/test_bwt/feedback/list">Список</a></li> 
                        <li class="navbar-nav navbar-right"><a href="/test_bwt/user/logout" data-method="POST"> Выход </a></li>
                        <li class="navbar-nav navbar-right navbar-text "><?= "Здравствуйте, ". $_SESSION["User"] ?></li>
                        <?php else:?> 
                        <li class="navbar-nav navbar-right"><a href="/test_bwt/user/login">Вход</a></li> 
                        <?php endif;?>
                      </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
                
        
        <div class="container">
             <?php include 'application/views/' . $content_view; ?> 
        </div>

        <script src="http://<?= $_SERVER['SERVER_NAME'] ?>/test_bwt/js/jquery-1.9.1.js" type="text/javascript"></script>
        <script src="http://<?= $_SERVER['SERVER_NAME'] ?>/test_bwt/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="http://<?= $_SERVER['SERVER_NAME'] ?>/test_bwt/js/bootstrap-datepicker.min.js" type="text/javascript"></script> 
        <script src="http://<?= $_SERVER['SERVER_NAME'] ?>/test_bwt/js/bootstrapValidator.min.js" type="text/javascript"></script>
        <script src="http://<?= $_SERVER['SERVER_NAME'] ?>/test_bwt/js/main.js" type="text/javascript"></script>
    </body>
</html>