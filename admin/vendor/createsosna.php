<?php 
	require_once '../config/connect.php';

	$kvartal = $_POST['kvartal'];
	$lesnichestvo = $_POST['lesnichestvo'];
	$kolvo = $_POST['kolvo'];

	mysqli_query($connect, "INSERT INTO `sosna` (`id`, `kvartal`, `lesnichestvo`, `kolvo`) VALUES (NULL, '$kvartal', '$lesnichestvo', '$kolvo')");

	header('Location: ../admin.php');
 ?>