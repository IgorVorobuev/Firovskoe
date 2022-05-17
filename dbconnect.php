<?php
header('Content-Type: text/html; charset=utf-8');

        $server = "localhost"; /* имя хоста (уточняется у провайдера), если работаем на локальном сервере, то указываем localhost */
        $username = "root"; /* Имя пользователя БД */
        $password = ""; /* Пароль пользователя, если у пользователя нет пароля то, оставляем пустым */
        $database = "les"; /* Имя базы данных, которую создали */

        // Подключение к базе данный через MySQLi
        $mysqli = new mysqli($server, $username, $password, $database);

        // Проверяем, успешность соединения. 
        if ($mysqli->connect_errno) {
                die("<p><strong>Ошибка подключения к БД</strong></p><p><strong>Код ошибки: </strong> ". $mysqli->connect_errno ." </p><p><strong>Описание ошибки:</strong> ".$mysqli->connect_error."</p>");
        }

        // Устанавливаем кодировку подключения
        $mysqli->set_charset('utf8');

        //Для удобства, добавим здесь переменную, которая будет содержать название нашего сайта
        $address_site = "http://les:80/index.php";
    ?>