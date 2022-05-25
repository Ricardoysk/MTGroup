<?php
    include("database.php");
    $con=conectar();

    $sql="SELECT * FROM videos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MTGroup</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">

<section class="flex">

   <a href="#inicio" class="logo">MTgroup.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="contenido.php">Contenido</a>
      <a href="index.php">Cerrar Sesión</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

</header>
  
<section class="home">


<div class="login">


  <div class="container mt-5 pd-5">
    <h2 class="text-center">Registrar Video para la web</h2>
    <hr>

    <form action="controladorinsert.php" method="post">
    <div class="form-group">
      <label for="id">N° Registro</label>
      <input type="text" name="id" class="form-control">
    </div>
    <div class="form-group">
      <label for="nombreVideo">Nombre del Video</label>
      <input type="text" name="nombreVideo" class="form-control">
    </div>
    <div class="form-group">
      <label for="urlVideo">Pegar URL del Video <em>(Desde Youtube)</em></label>
      <input type="text" name="urlVideo" class="form-control">
    </div>
    <div class="form-group">
      <label for="nombreVideo">Descripción</label>
      <input type="text" name="comentario" class="form-control">
    </div>

      <div class="form-group mb-5">
        <button type="submit" class="btn btn-primary  btn-lg btn-block">Registrar Video</button>
    </div>

  </form>
  </div>
</section>

<br><br>
<br><br>

</div>




</body>
</html>