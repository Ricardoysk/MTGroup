<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'database.php';
	$nombreVideo = $_POST['nombreVideo'];
	$urlVideo = $_POST['urlVideo'];
	$comentario = $_POST['comentario'];


	$sentencia = $bd->prepare("INSERT INTO videos(nombreVideo,urlVideo,comentario) VALUES (?,?,?);");
	$resultado = $sentencia->execute([$nombreVideo,$urlVideo,$comentario]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: contenido2.php');
	}else{
		echo "Error";
	}
?>