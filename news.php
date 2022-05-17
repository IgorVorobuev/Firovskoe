<?php
    //Подключение шапки
    require_once("header.php");
?>

<div class="start">
        <div class="bg6">
            <div class="center" style="padding-top: 170px; color: white; text-shadow: 3px 3px 3px black;">
                <h1 style="font-size: 70px;">НОВОСТИ</h1>
            </div>
        </div>
</div>

<div>
        <h1 class="center" style="font-size:40px; padding: 20px;">
            ПОСЛЕДНИЕ НОВОСТИ И СОБЫТИЯ:
        </h1>

        <?php 

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "les";

    $connect = mysqli_connect($server, $username, $password, $database);

    if ($connect == false) {
        echo "Ошибка подключения";
    }

    $result = mysqli_query($connect, "SELECT * FROM `news`");

 ?>

<?php 
    while($news = mysqli_fetch_assoc($result))
    {
        ?>
        <div class="one">
            <div class="otdel" style="padding-top:15px;">
                <img src="img/<?php echo $news['image'];?>">
            </div>
            <div class="info" style="padding-left: 75px; padding-top: 40px;">
                    <h1> <?php echo $news['title'];
                     ?> </h1>
                    <p><b><?php echo $news['text']; ?></b></p>
            </div>
        </div>
        <?php
    }
 ?>

<?php
    //Подключение подвала
    require_once("footer.php");
?>