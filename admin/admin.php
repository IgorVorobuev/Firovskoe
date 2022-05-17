<?php 
	
	require_once 'config/connect.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
</head>
<style>
	th, td {
		padding: 10px;
	}
	th {
		background: #606060;
		color: white;
	}
	td {
		background: #b5b5b5;
	}
</style>
<body>
	<h1>Таблица Новости</h1>
	<table>
		<tr>
			<th>id</th>
			<th>image</th>
			<th>title</th>
			<th>text</th>
		</tr>
		
			<?php 	
				$news = mysqli_query($connect, "SELECT * FROM `news`");
				$news = mysqli_fetch_all($news);
				foreach ($news as $news) {
					?>

					<tr>
						<td><?= $news[0] ?></td>
						<td><?= $news[1] ?></td>
						<td><?= $news[2] ?></td>
						<td><?= $news[3] ?></td>
						<td><a href="update.php?id=<?= $news[0] ?>">Изменить</a></td>
						<td><a style="color: red;" href="vendor/delete.php?id=<?= $news[0] ?>">Удалить</a></td>
					</tr>

					<?php
				}
		 	?>
	</table>
	<h3>Добавить новость</h3>
	<form action="vendor/create.php" method="post">
		<p>Img</p>
		<input type="text" name="img">
		<p>Title</p>
		<input type="text" name="title">
		<p>Text</p>
		<textarea name="text"></textarea>
		<br>
		<br>
		<button type="submit">New</button>
	</form>

<br>
<h1>Таблица еловых лесов</h1>
	<table>
		<tr>
			<th>id</th>
			<th>kvartal</th>
			<th>lesnichestvo</th>
			<th>kolvo</th>
		</tr>
		
			<?php 	
				$el = mysqli_query($connect, "SELECT * FROM `el`");
				$el = mysqli_fetch_all($el);
				foreach ($el as $el) {
					?>

					<tr>
						<td><?= $el[0] ?></td>
						<td><?= $el[1] ?></td>
						<td><?= $el[2] ?></td>
						<td><?= $el[3] ?></td>
						<td><a href="updateel.php?id=<?= $el[0] ?>">Изменить</a></td>
						<td><a style="color: red;" href="vendor/deleteel.php?id=<?= $el[0] ?>">Удалить</a></td>
					</tr>

					<?php
				}
		 	?>

	</table>
	<h3>Добавить участок</h3>
	<form action="vendor/createel.php" method="post">
		<p>Квартал</p>
		<input type="text" name="kvartal">
		<p>Лесничество</p>
		<input type="text" name="lesnichestvo">
		<p>Количество</p>
		<input type="text" name="kolvo">
		<br>
		<br>
		<button type="submit">New</button>
	</form>

	<br>
	<h1>Таблица сосновых лесов</h1>
	<table>
		<tr>
			<th>id</th>
			<th>kvartal</th>
			<th>lesnichestvo</th>
			<th>kolvo</th>
		</tr>
		
			<?php 	
				$sosna = mysqli_query($connect, "SELECT * FROM `sosna`");
				$sosna = mysqli_fetch_all($sosna);
				foreach ($sosna as $sosna) {
					?>

					<tr>
						<td><?= $sosna[0] ?></td>
						<td><?= $sosna[1] ?></td>
						<td><?= $sosna[2] ?></td>
						<td><?= $sosna[3] ?></td>
						<td><a href="updatesosna.php?id=<?= $sosna[0] ?>">Изменить</a></td>
						<td><a style="color: red;" href="vendor/deletesosna.php?id=<?= $sosna[0] ?>">Удалить</a></td>
					</tr>

					<?php
				}
		 	?>

	</table>
	<h3>Добавить участок</h3>
	<form action="vendor/createsosna.php" method="post">
		<p>Квартал</p>
		<input type="text" name="kvartal">
		<p>Лесничество</p>
		<input type="text" name="lesnichestvo">
		<p>Количество</p>
		<input type="text" name="kolvo">
		<br>
		<br>
		<button type="submit">New</button>
	</form>

	<br>
	<h1>Таблица берёзовых лесов</h1>
	<table>
		<tr>
			<th>id</th>
			<th>kvartal</th>
			<th>lesnichestvo</th>
			<th>kolvo</th>
		</tr>
		
			<?php 	
				$bereza = mysqli_query($connect, "SELECT * FROM `bereza`");
				$bereza = mysqli_fetch_all($bereza);
				foreach ($bereza as $bereza) {
					?>

					<tr>
						<td><?= $bereza[0] ?></td>
						<td><?= $bereza[1] ?></td>
						<td><?= $bereza[2] ?></td>
						<td><?= $bereza[3] ?></td>
						<td><a href="updatebereza.php?id=<?= $bereza[0] ?>">Изменить</a></td>
						<td><a style="color: red;" href="vendor/deletebereza.php?id=<?= $bereza[0] ?>">Удалить</a></td>
					</tr>

					<?php
				}
		 	?>

	</table>
	<h3>Добавить участок</h3>
	<form action="vendor/createbereza.php" method="post">
		<p>Квартал</p>
		<input type="text" name="kvartal">
		<p>Лесничество</p>
		<input type="text" name="lesnichestvo">
		<p>Количество</p>
		<input type="text" name="kolvo">
		<br>
		<br>
		<button type="submit">New</button>
	</form>

	<h1>Настройки аккаунта администратора</h1>
	<table>
		<tr>
			<th>id</th>
			<th>first_name</th>
			<th>last_name</th>
			<th>email</th>
			<th>password</th>
		</tr>
		
			<?php 	
				$users = mysqli_query($connect, "SELECT * FROM `users`");
				$users = mysqli_fetch_all($users);
				foreach ($users as $users) {
					?>

					<tr>
						<td><?= $users[0] ?></td>
						<td><?= $users[1] ?></td>
						<td><?= $users[2] ?></td>
						<td><?= $users[3] ?></td>
						<td><a href="updateusers.php?id=<?= $users[0] ?>">Изменить</a></td>
						<td><a style="color: red;" href="vendor/deleteusers.php?id=<?= $users[0] ?>">Удалить</a></td>
					</tr>

					<?php
				}
		 	?>

	</table>
	<h3>Добавить аккаунт</h3>
	<form action="vendor/createusers.php" method="post">
		<p>Имя</p>
		<input type="text" name="first_name">
		<p>Фамилия</p>
		<input type="text" name="last_name">
		<p>Email</p>
		<input type="text" name="email">
		<p>Password</p>
		<input type="text" name="password">
		<br>
		<br>
		<button type="submit">New</button>
	</form>

<a href="../indexadmin.php" style="padding-left: 900px;">Вернуться на главную</a>
</body>
</html>