<?php  
		include 'database.php';
		$sentencia = $bd->query("SELECT * FROM videos;");
		$videos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($video);


	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Videos</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<link rel="stylesheet" href="css/style.css">

<!-- swiper css link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>

<header class="header">

<section class="flex">

   <a href="#inicio" class="logo">MTgroup.</a>

   <nav class="navbar">
      <a href="index.php">Cerrar Sesión</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

</header>

<section class="home">
	<center>
		<h3>Lista de Videos</h3>
		<table class="table table-hover table-dark">
			<tr>
				<td>Id</td>
				<td>Nombre Video</td>
				<td>Url</td>
				<td>Comentario</td>
			</tr>

			<?php 
				foreach ($videos as $dato) {
					?>
					<tr>
						<td><?php echo $dato->id; ?></td>
						<td><?php echo $dato->nombreVideo; ?></td>
						<td><?php echo $dato->urlVideo; ?></td>
						<td><?php echo $dato->comentario; ?></td>
						<td><a href="editar.php?id=<?php echo $dato->id; ?>">Editar</a></td>
						<td><a href="eliminar.php?id=<?php echo $dato->id; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>

		<!-- inicio insert -->
		<hr>
		<h3>Ingresar Nuevo Video:</h3>
		<form method="POST" action="insertar2.php">
			<table class="table table-hover table-dark">
				<tr>
					<td>Nombre Video </td>
					<td><input type="text" name="nombreVideo"></td>
				</tr>
				<tr>
					<td>Url: </td>
					<td><input type="text" name="urlVideo"></td>
				</tr>
				<tr>
					<td>Comentario: </td>
					<td><input type="text" name="comentario"></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input type="reset" name=""></td>
					<td><input type="submit" value="INGRESAR Video"></td>
				</tr>
			</table>
		</form>
		<!-- fin insert-->

	</center>

    </section>

    <section>

   <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-youtube"></a>
   </div>

   <div class="credit">&copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!</div>

</section>
</body>
</html>