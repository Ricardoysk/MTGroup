<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: contenido2.php');
	}

	include 'database.php';
	$id2 = $_POST['id2'];
	$nombreVideo = $_POST['nombreVideo'];
	$urlVideo = $_POST['urlVideo'];
	$comentario = $_POST['comentario'];

	$sentencia = $bd->prepare("UPDATE videos SET nombreVideo = ?, urlVideo = ?, comentario = ?;");
	$resultado = $sentencia->execute([$nombreVideo,$urlVideo,$comentario]);

	if ($resultado === TRUE) {
		header('Location: contenido2.php');
	}else{
		echo "Error";
	}
?>