<?php
    //Подключение шапки
    require_once("header.php");
?>
<div class="start">
        <div class="bg3">
            <div class="center" style="padding-top: 170px; color: white; text-shadow: 3px 3px 3px black;">
                <h1 style="font-size: 70px;">ДРОВА</h1>
            </div>
        </div>
</div>
<div style="padding-bottom:30px;">
    <h1 class="center" style="padding-top:50px;">Документы необходимые для заключения договора купли-продажи дров:</h1>
    <p style="width:700px; font-size:19px;" class="center">Для заключения договора купли-продажи лесных насаждений для осуществления заготовки древесины для отопления заявитель представляет в участковое лесничество документы, указанные в подпунктах «а», «б» пункта 30 настоящего подраздела Административного регламента, и:</p>
    <div class="doc big">
        <ol>
            <li><b>Копии правоустанавливающих документов на баню</b>, право на которую не зарегистрировано в Едином государственном реестре прав на недвижимое имущество и сделок с ним, и (или) иные документы, подтверждающие нахождение бани в составе домовладения, если целью использования древесины является отопление бани;
            </li>
            <li>
                <b>Копии правоустанавливающих документов на дом</b>, право на который не зарегистрировано в Едином государственном реестре прав на недвижимое имущество и сделок с ним, и (или) иные документы, на основании которых определяются нормативы заготовки древесины для отопления.
            </li>
            <li>
                <b>Документ, удостоверяющий личность</b>, в том числе паспорт гражданина Российской Федерации, временное удостоверение личности гражданина Российской Федерации, военный билет, удостоверение личности офицера, паспорт моряка, а также иные документы, признаваемые в соответствии с законодательством Российской Федерации документами, удостоверяющими личность;
            </li>
            <li>
                <b>Доверенность, оформленную в соответствии с законодательством Российской Федерации.</b> (В случае обращения третьего лица)
            </li>
        </ol>
    </div>
</div>
<div class="zakon">
    <div class="line2" style="padding-top: 70px;">
        <div class="lesnik">
            <img src="img/lesnik.png" alt="lesnik">
        </div>
        <div class="center" style="padding-top:30px; padding-left: 70px;">
            <h1 style="padding-bottom: 30px; font-size: 50px;">ВНИМАНИЕ!!!</h1>
            <h1>ОТВЕСТВЕННОСТЬ ЗА НАРУШЕНИЕ  ЗАКОНА ТВЕРСКОЙ ОБЛАСТИ
                ОБ УСТАНОВЛЕНИИ ПОРЯДКА И НОРМАТИВОВ ЗАГОТОВКИ ГРАЖДАНАМИ
                ДРЕВЕСИНЫ ДЛЯ СОБСТВЕННЫХ НУЖД И ПОРЯДКА ЗАКЛЮЧЕНИЯ ДОГОВОРА
                КУПЛИ-ПРОДАЖИ ЛЕСНЫХ НАСАЖДЕНИЙ ДЛЯ СОБСТВЕННЫХ НУЖД
                ОТ 18.09.2007 №96-ЗО</h1>
        </div>
    </div>
</div>
<div class="line3 center">
    <h1>Заполненный бланк можно отправить на почту через</h1><a href="#form" style="text-decoration: underline; color: green; font-size: 27px;">ФОРМУ</a>
</div>
<div style="padding-top:10px;" class="center">
            <button class="btn_green">
                <a href="zayavlenie naseleniy.docx" download="" style="padding-top:20px;">Бланк заявления</a>
            </button>
        </div>
<div class="elki center" style="padding-top:50px;">
    <h1 style="font-size:50px;" id="el">ЕЛЬ</h1>
    <div class="el">
        <img src="img/el.jpg" class="center" alt="el">
    </div>
    <div class="table1">
        <h1>Информационная таблица:</h1>
            <div class="tablet" style="padding-top:20px; padding-left: 540px;">
                <table style="width: 600px;">
                    <th style="padding-left:40px;width:100px;">Квартал</th><th>Лесничество</th><th style="padding-right:40px;width:100px;">Количество деревьев</th>
                    <?php
                        $con_str=mysqli_connect('localhost', 'root', '', 'les');
                          
                          mysqli_select_db($con_str,'les');
                         
                        $result = mysqli_query($con_str, "SELECT * FROM el");
                        if (!$result) {
                            printf("Error: %s\n", mysqli_error($con_str));
                            exit();
                        }
                          while($row = mysqli_fetch_array($result)){
                            $kvartal=$row['kvartal'];
                            $lesnichestvo=$row['lesnichestvo'];
                            $kolvo=$row['kolvo'];
                            echo "<table style = width:600px;><td style=padding-left:40px;width:100px;>$kvartal</td> <td>$lesnichestvo</td> <td style=padding-right:40px;width:100px;>$kolvo</td></table>";
                            }
                         mysqli_close($con_str);  
                    ?>
                </table>
                 
            </div>
    </div>
    <div class="map1">
        <div style="padding-top:30px;">
            <button class="btn_green">
                <a href="map1.php" style="padding-top:20px;">Показать карту</a>
            </button>
        </div>
    </div>
</div>

<div class="sos center" style="padding-top:50px;">
    <h1 style="font-size:50px;" id="sosna">СОСНА</h1>
    <div class="el">
        <img src="img/sosna.jpg" class="center" alt="sosna">
    </div>
    <div class="table2">
        <h1>Информационная таблица:</h1>
        <div class="tablet" style="padding-top:20px; padding-left: 540px;">
                <table style="width: 600px;">
                    <th style="padding-left:40px;width:100px;">Квартал</th><th>Лесничество</th><th style="padding-right:40px;width:100px;">Количество деревьев</th>
                    <?php
                        $con_str=mysqli_connect('localhost', 'root', '', 'les');
                          
                          mysqli_select_db($con_str,'les');
                         
                        $result = mysqli_query($con_str, "SELECT * FROM sosna");
                        if (!$result) {
                            printf("Error: %s\n", mysqli_error($con_str));
                            exit();
                        }
                          while($row = mysqli_fetch_array($result)){
                            $kvartal=$row['kvartal'];
                            $lesnichestvo=$row['lesnichestvo'];
                            $kolvo=$row['kolvo'];
                            echo "<table style = width:600px;><td style=padding-left:40px;width:100px;>$kvartal</td> <td>$lesnichestvo</td> <td style=padding-right:40px;width:100px;>$kolvo</td></table>";
                            }
                         mysqli_close($con_str);  
                    ?>
                </table>
                 
            </div>
    </div>
    <div class="map2">
        <div style="padding-top:30px;">
            <button class="btn_green">
                <a href="map2.php" style="padding-top:20px;">Показать карту</a>
            </button>
        </div>
    </div>
</div>

<div class="berezi center" style="padding-top:50px;">
    <h1 style="font-size:50px;" id="bereza">БЕРЕЗА</h1>
    <div class="el">
        <img src="img/bereza.jpg" class="center" alt="bereza">
    </div>
    <div class="table1">
        <h1>Информационная таблица:</h1>
        <div class="tablet" style="padding-top:20px; padding-left: 540px;">
                <table style="width: 600px;">
                    <th style="padding-left:40px;width:100px;">Квартал</th><th>Лесничество</th><th style="padding-right:40px;width:100px;">Количество деревьев</th>
                    <?php
                        $con_str=mysqli_connect('localhost', 'root', '', 'les');
                          
                          mysqli_select_db($con_str,'les');
                         
                        $result = mysqli_query($con_str, "SELECT * FROM bereza");
                        if (!$result) {
                            printf("Error: %s\n", mysqli_error($con_str));
                            exit();
                        }
                          while($row = mysqli_fetch_array($result)){
                            $kvartal=$row['kvartal'];
                            $lesnichestvo=$row['lesnichestvo'];
                            $kolvo=$row['kolvo'];
                            echo "<table style = width:600px;><td style=padding-left:40px;width:100px;>$kvartal</td> <td width:100px;>$lesnichestvo</td> <td style=padding-right:40px;width:100px;>$kolvo</td></table>";
                            }
                         mysqli_close($con_str);  
                    ?>
                </table>
                 
            </div>
    </div>
    <div class="map1">
        <div style="padding-top:30px;">
            <button class="btn_green">
                <a href="map3.php" style="padding-top:20px;">Показать карту</a>
            </button>
        </div>
    </div>
</div>
    <h1 class="center" style="padding-top:30px;" id="form">Форма обратной связи:</h1>
<div style="padding-left: 425px; padding-top:30px;">

    <form id="ajax-contact-form" enctype="multipart/form-data" method="post" style="width: 1200px;">
          <div class="form-group">
            <label for="nameFF">Имя:</label>
            <input id="nameFF" style="width:150px; height: 45px; margin-right: 30px; background-color: #cfe2c1;" placeholder="Имя" name="nameFF" type="text" required>
          </div>
          <div class="form-group">
            <label for="contactFF">E-mail:</label>
            <input id="contactFF" style="width:150px; height: 45px; margin-right: 30px; background-color: #cfe2c1;" placeholder="Почта" name="contactFF" type="email" required>
          </div>
          <div class="form-group">
            <label for="telFF">Телефон:</label>
            <input id="telFF" style="width:150px; height: 45px; margin-right: 30px; background-color: #cfe2c1;" placeholder="Номер телефона" name="telFF" type="tel" required>
          </div>
          <div class="form-group">
            <label for="projectFF">Сообщение</label>
            <textarea id="projectFF" style="width:250px; height: 45px; margin-right: 30px; background-color: #cfe2c1; " placeholder="Введите сообщение" name="projectFF" cols="40" rows="3"></textarea>
          </div>
          <div class="control-file">
            <label for="fileFF">Прикрепить файл:</label>
            <input id="fileFF" name="fileFF" type="file" style="margin-top: 20px;">
          </div>
          <button class="btn_green" type="submit" id="submitFF" style="width:400px; height:40px; margin-left: 10px; margin-top: 25px; font-size: 16px;">Отправить сообщение</button>
        </form>
</div>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/scriptp.js"></script>
<?php
    //Подключение подвала
    require_once("footer.php"); 
?>