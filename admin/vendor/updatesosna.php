<?php 	
	require_once '../config/connect.php';
	
	$id = $_POST['id'];
	$kvartal = $_POST['kvartal'];
	$lesnichestvo = $_POST['lesnichestvo'];
	$kolvo = $_POST['kolvo'];

	mysqli_query($connect, "UPDATE `sosna` SET `kvartal` = '$kvartal', `lesnichestvo` = '$lesnichestvo', `kolvo` = '$kolvo' WHERE `sosna`.`id` = '$id'");

	header('Location: ../admin.php');
 ?>
