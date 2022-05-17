<?php 	
	require_once 'config/connect.php';

	$news_id = $_GET['id'];
	$news = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = '$news_id'");
	$news = mysqli_fetch_assoc($news);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Update News</title>
 </head>
 <body>
 	<h3>Изменить новость</h3>
	<form action="vendor/update.php" method="post">
		<input type="hidden" name="id" value="<?= $news['id'] ?>">
		<p>Картинка</p>
		<input type="text" name="img" value="<?= $news['image'] ?>">
		<p>Заголовок</p>
		<input type="text" name="title" value="<?= $news['title'] ?>">
		<p>Текст</p>
		<textarea name="text"><?= $news['text'] ?></textarea>
		<br>
		<br>
		<button type="submit">Update</button>
	</form>
 </body>
 </html>