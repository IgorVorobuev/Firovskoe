<?php
session_start();
?>
 <?php  
 require_once("db.php");
 if ($connection == false) {
     echo "Error";
     echo mysql_connect_errno();
     exit();
 }
  ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Вышневолоцкое лесничество</title>
        <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                "use strict";
                //================ Проверка email ==================
         
                //регулярное выражение для проверки email
                var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
                var mail = $('input[name=email]');
                 
                mail.blur(function(){
                    if(mail.val() != ''){
         
                        // Проверяем, если введенный email соответствует регулярному выражению
                        if(mail.val().search(pattern) == 0){
                            // Убираем сообщение об ошибке
                            $('#valid_email_message').text('');
         
                            //Активируем кнопку отправки
                            $('input[type=submit]').attr('disabled', false);
                        }else{
                            //Выводим сообщение об ошибке
                            $('#valid_email_message').text('Не правильный Email');
         
                            // Дезактивируем кнопку отправки
                            $('input[type=submit]').attr('disabled', true);
                        }
                    }else{
                        $('#valid_email_message').text('Введите Ваш email');
                    }
                });
         
                //================ Проверка длины пароля ==================
                var password = $('input[name=password]');
                 
                password.blur(function(){
                    if(password.val() != ''){
         
                        //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                        if(password.val().length < 6){
                            //Выводим сообщение об ошибке
                            $('#valid_password_message').text('Минимальная длина пароля 6 символов');
         
                            // Дезактивируем кнопку отправки
                            $('input[type=submit]').attr('disabled', true);
                             
                        }else{
                            // Убираем сообщение об ошибке
                            $('#valid_password_message').text('');
         
                            //Активируем кнопку отправки
                            $('input[type=submit]').attr('disabled', false);
                        }
                    }else{
                        $('#valid_password_message').text('Введите пароль');
                    }
                });
            });
        </script>
    </head>
    <body>
<header id="first-page">
    <div class="bg_fon">
        <div class="line">
            <div class="logo">
            <a href="index.php"><img src="img/logoles2.png"></a>
        </div>
        <nav class="dws-menu">
        <ul>
            <li><a href="index.php"><i class="fa fa-home"></i>Главная</a></li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i>Отпуск древесины</a>
                <ul>
                    <li><a href="drova.php">Дрова</a>
                        <ul>
                            <li><a href="drova.php#el">Ель</a></li>
                            <li><a href="drova.php#sosna">Сосна</a></li>
                            <li><a href="drova.php#bereza">Береза</a></li>
                        </ul>
                    </li>
                    <li><a href="del.php">Деловая древесина</a>
                        <ul>
                            <li><a href="del.php#opt">Оптом</a></li>
                            <li><a href="del.php#rozn">Поштучно</a></li>
                                <ul>
                                    <li><a href="#">Ель</a></li>
                                    <li><a href="#">Сосна</a></li>
                                    <li><a href="#">Береза</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                        </ul>
            </li>
            <li><a href="onas.php"><i class="fa fa-cogs"></i>О нас</a>
            </li>
            <li><a href="news.php"><i class="fa fa-th-list"></i>Новости</a></li>
            <li><a href="contacts.php"><i class="fa fa-envelope-open"></i>Контакты</a>
               <ul>
                    <li><a href="https://les.tver.ru/">Министерство</a></li>
                    <li><a href="contacts.php">Наше отделение</a></li>
                </ul>
            </li>
            </ul>
         </nav>
        </div>
        <div id="auth_block" style="padding-right:50px; color: white;">
            <?php
                //Проверяем авторизован ли пользователь
                if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
                // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
            ?>
            <div id="link_auth">
                <a href="/form_auth.php">Авторизация</a>
            </div>
            <?php
                }else{
                    if (isset($_POST['email'])) {
    $login_true = mysqli_query($connections, "SELECT * FROM `user` WHERE email='".$_POST['email']."' AND password = MD5('".$_POST['password']."')");
    if ($email_true) {
        $user = mysql_fetch_assoc($email_true);
        $_SESSION['email_user'] = $email_true;
        $_SESSION['email'] = $user['email']; //или где там имя храниться
    } else echo "Не правильно";
    }   
echo "Здравствуйте, ".$_SESSION["email"];
                    //Если пользователь авторизован, то выводим ссылку Выход
            ?>
            
                    <div id="link_logout" style="padding-top: 10px; padding-right:80px;">
                        <a href="/logout.php">Выход</a>
                    </div>
            <?php
                }
            ?>
            </div>
             <div class="clear"></div>
    </div>
             
    <div class="back">
                <input type="button" onclick="history.back();" value="Назад"/>
            </div>
</header>
 