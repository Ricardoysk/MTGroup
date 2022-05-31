<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
	include 'database.php';
	$sentencia = $bd->prepare("DELETE FROM videos WHERE id = ?;");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location: contenido2.php');
	}else{
		echo "Error";
	}

?>