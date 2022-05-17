<?php
             
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
        $address_site = "http://onas/";

            $name = htmlspecialchars($_POST['name']);
            $comment = htmlspecialchars($_POST['comment']);

            $result_insert=$mysqli->query("INSERT INTO `comments` (name, comment) VALUES ('".$name."', '".$comment."')");
        
    header('Location: onas.php');
?>
