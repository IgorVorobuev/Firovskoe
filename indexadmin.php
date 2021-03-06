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
            <li><a href="indexadmin.php"><i class="fa fa-home"></i>Главная</a></li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i>Выдача Древесины</a>
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
            <li>    <a href="admin/admin.php">Административная панель</a></li>
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
<body>
    <div class="start">
        <div class="bg2">
            <div class="center" style="padding-top: 130px; color: white; text-shadow: 3px 3px 3px black;">
                <h1 style="font-size: 50px;">Вышневолоцкий отдел <br>лесного хозяйства</h1>
                <h3 style="font-size: 40px;">ГКУ" Фировское лесничество Тверской области"</h3>
            </div>
        </div>
    </div>
    <div class="all">
        <h1 class="center" style="font-size:40px; padding: 20px;">
            ОТДЕЛЫ ЛЕСНИЧЕСТВА
        </h1>

        <div class="one">
            <div class="otdel" style="padding-top:20px;">
                <img src="img/logoles.png">
            </div>
            <div class="info">
                    <h1>Вышневолоцкий отдел лесного хозяйства</h1>
                    <p><b>Адрес</b>: г. Вышний Волочек, Ржевский тракт, д. 110а</p>
                    <p><b>Телефон</b>: 8(48233) 5-24-14</p>
                    <p><b>Время работы</b>: Пн.-Чт. 8.00-17.00 <br> Пт. 8,00-16.00 <br>Обед 12.00-13.00</p>
                    <p><b>Сотрудники</b>: <br>
                        <b>Начальник отдела</b>- Воробьева Людмила Васильевна
                        <br>
                        Инженер по лесопользованию- Щербинина Александра Сергеевна
                        <br>
                        Инженер по лесовосстановлению- Чистякова Оксана Александровна
                        <br>
                        Инженер по охране леса- Ефимова Ольга Николаевна
                    </p>
            </div>
        </div>

        <div class="one">
            <div class="otdel" style="padding-top:5px;">
                <img src="img/otdel1.jpg">
            </div>
            <div class="info" style="padding-right: 25px;">
                    <h1>Лужниковское участковое лесничество:</h1>
                    <p><b>Адрес</b>: п. Красномайский, ул. Октябрьская, д.32а</p>
                    <p><b>Телефон</b>: 2-52-38</p>
                    <p><b>Время работы</b>: Пн.-Чт. 8.00-17.00 <br> Пт. 8,00-16.00 <br>Обед 12.00-13.00</p>
                    <p><b>Сотрудники</b>: <br>

                        Лесничий  -  Тарасова Наталья Анатольевна
                        <br>
                        Помощник   лесничего  - Яргина Людмила Николаевна
                    </p>
            </div>
        </div>

        <div class="one">
            <div class="otdel" style="padding-top:5px;">
                <img src="img/otdel2.png">
            </div>
            <div class="info" style="padding-right: 60px;">
                    <h1>Дятловское участковое лесничество:</h1>
                    <p><b>Адрес</b>: п. Красномайский, ул. Октябрьская, д.32а</p>
                    <p><b>Время работы</b>: Пн.-Чт. 8.00-17.00 <br> Пт. 8,00-16.00 <br>Обед 12.00-13.00</p>
                    <p><b>Сотрудники</b>: <br>
                        Лесничий -   Смирнов Сергей Петрович
                        <br>
                        Помощник лесничего - Самусев Михаил Викторович
                    </p>
            </div>
        </div>

        <div class="one">
            <div class="otdel" style="padding-top:5px;">
                <img src="img/otdel4.png">
            </div>
            <div class="info" style="padding-right: 75px;">
                    <h1>Рученское участковое лесничество:</h1>
                    <p><b>Адрес</b>: п. Рученая, д.9</p>
                    <p><b>Телефон</b>: 2-05-12</p>
                    <p><b>Время работы</b>: Пн.-Чт. 8.00-17.00 <br> Пт. 8,00-16.00 <br>Обед 12.00-13.00</p>
                    <p><b>Сотрудники</b>: <br>
                        Лесничий  - Москавлев Александр Анатольевич
                        <br>
                        Помощник  лесничего -  Белоус Ольга Владимировна
                    </p>
            </div>
        </div>

        <div class="one">
            <div class="otdel" style="padding-top:15px;">
                <img src="img/otdel3.jpg">
            </div>
            <div class="info" style="padding-right: 15px;">
                    <h1>Красномайское участковое лесничество:</h1>
                    <p><b>Адрес</b>: п. Красномайский, ул. Октябрьская, д.3</p>
                    <p><b>Телефон</b>: 2-52-38</p>
                    <p><b>Время работы</b>: Пн.-Чт. 8.00-17.00 <br> Пт. 8,00-16.00 <br>Обед 12.00-13.00</p>
                    <p><b>Сотрудники</b>: <br>
                        Лесничий  - Илатовский Иван Васильевич
                        <br>
                        Помощник  лесничего -  Илатовская Ирина Викторовна
                    </p>
            </div>
        </div>

        <div class="one">
            <div class="otdel">
                <img src="img/otdel6.png">
            </div>
            <div class="info" style="padding-right: 65px;">
                    <h1>Осеченское участковое лесничество:</h1>
                    <p><b>Адрес</b>: г. В. Волочек, Ржевский тракт, д.110а</p>
                    <p><b>Время работы</b>: Пн.-Чт. 8.00-17.00 <br> Пт. 8,00-16.00 <br>Обед 12.00-13.00</p>
                    <p><b>Сотрудники</b>: <br>
                        Лесничий  - Чебаев Николай Васильевич
                        <br>
                        Помощник  лесничего  -  Малеева Александра Игоревна
                    </p>
            </div>
        </div>

        <div class="one">
            <div class="otdel">
                <img src="img/otdel7.png">
            </div>
            <div class="info" style="padding-right: 45px;">
                    <h1>Заборовское участковое лесничество:</h1>
                    <p><b>Адрес</b>: г. В. Волочек, Ржевский тракт, д.110а</p>
                    <p><b>Время работы</b>: Пн.-Чт. 8.00-17.00 <br> Пт. 8,00-16.00 <br>Обед 12.00-13.00</p>
                    <p><b>Сотрудники</b>: <br>
                        Лесничий  -  Щербинин Михаил Алексеевич
                        <br>
                        Помощник  лесничего -  Садовская Екатерина Андреевна
                    </p>
            </div>
        </div>

        <div class="one">
            <div class="otdel">
                <img src="img/otdel8.png">
            </div>
            <div class="info" style="padding-right: 35px;">
                    <h1>Есеновичское участковое лесничество:</h1>
                    <p><b>Адрес</b>: г. В. Волочек, Ржевский тракт, д.110а</p>
                    <p><b>Телефон</b>: 7-21-63</p>
                    <p><b>Время работы</b>: Пн.-Чт. 8.00-17.00 <br> Пт. 8,00-16.00 <br>Обед 12.00-13.00</p>
                    <p><b>Сотрудники</b>: <br>
                        Лесничий  - Жарков Владимир Валентинович
                        <br>
                        Помощник  лесничего  -  Ефимова Светлана Вячеславовна
                    </p>
            </div>
        </div>
    </div>

    <a href="fullmap.html">МАРА</a>
    <div class="job">
        <h1 class="center" style="padding-top:30px;">Основные направления деятельности:</h1>
        <div class="job_list center">
            <ul>
                <li>Использование лесов -  основными видами использования лесов являются:  заготовка древесины; строительство, реконструкция, эксплуатация линейных объектов; осуществление рекреационной деятельности; выполнение работ по геологическому изучению недр, разработка месторождений полезных ископаемых. Доходы от использования лесов направляются в бюджеты всех уровней.</li>
                <li>Воспроизводство лесов - Вырубленные, погибшие, поврежденные леса подлежат воспроизводству. Лесовосстановление в Вышневолоцком  ОЛХ осуществляется путем естественного и искусственного восстановления лесов. На лесных участках, предоставленных в аренду для заготовки древесины, лесовосстановление осуществляется арендаторами этих лесных участков.</li>
                <li>Охрана лесов от пожаров- предупреждение лесных пожаров включает в себя противопожарное обустройство лесов и обеспечение средствами предупреждения и тушения лесных пожаров.</li>
                <li>Защита лесов от вредителей и болезней -защита лесов направлена на выявление в лесах вредных организмов (растений, животных, болезнетворных организмов, способных при определенных условиях нанести вред лесам или лесным ресурсам) и предупреждение их распространения, а в случае возникновения очагов вредных организмов, отнесенных к карантинным объектам, - на их локализацию и ликвидацию.</li>
                <li>Федеральный Государственный лесной надзор:                                                         <br>                                          - организация и осуществление в пределах своей компетенции федерального государственного лесного надзора (лесной охраны), федерального государственного пожарного надзора в лесах на землях лесного фонда Тверской области, за исключением лесов, расположенных на землях обороны и безопасности, землях особо охраняемых природных территорий федерального значения;                                                                                                            <br>  - планирование проведения плановых проверок юридических лиц и индивидуальных предпринимателей при осуществлении федерального государственного лесного надзора (лесной охраны), федерального государственного пожарного надзора в лесах;                                                                                                                                                <br> -организация и проведение плановых и внеплановых контрольно-надзорных мероприятий по соблюдению требований лесного законодательства Российской Федерации, правил пожарной безопасности в лесах;                     - патрулирование лесных участков;                                                                                                                                     <br> - осуществление сбора, обработки и анализа отчетов о результатах осуществления федерального государственного лесного надзора (лесной охраны), федерального государственного пожарного надзора в лесах;     - подготовка проектов законов, нормативных правовых актов Тверской области и Министерства и иных нормативных правовых актов, изменений и дополнений к ним в сфере осуществления федерального государственного лесного надзора (лесной охраны), федерального государственного пожарного надзора в лесах;     - рассмотрение в установленном порядке писем и обращений граждан и организаций, проведение проверок по фактам, изложенным в обращениях, в пределах компетенции;                                                                                       <br> - взаимодействие по вопросам федерального государственного лесного надзора (лесной охраны), федерального государственного пожарного надзора в лесах с территориальными подразделениями федеральных органов исполнительной власти, структурными подразделениями Правительства Тверской области, органами местного самоуправления, общественными объединениями, организациями и гражданами.</li>
            </ul>
        </div>
    </div>
</body>
<?php
    //Подключение подвала
    require_once("footer.php");
?>