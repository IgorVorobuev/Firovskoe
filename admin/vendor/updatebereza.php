<?php 	
	require_once '../config/connect.php';
	
	$id = $_POST['id'];
	$kvartal = $_POST['kvartal'];
	$lesnichestvo = $_POST['lesnichestvo'];
	$kolvo = $_POST['kolvo'];

	mysqli_query($connect, "UPDATE `bereza` SET `kvartal` = '$kvartal', `lesnichestvo` = '$lesnichestvo', `kolvo` = '$kolvo' WHERE `bereza`.`id` = '$id'");

	header('Location: ../admin.php');
 ?>
