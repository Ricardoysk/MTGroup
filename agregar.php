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
      <a href="#contenido_admin">Contenido</a>
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

    <form action="recibVideoYoutube.php" method="post">
    <div class="form-group">
      <label for="nombreVideo">Nombre del Video</label>
      <input type="text" name="nombreVideo" class="form-control">
    </div>
    <div class="form-group">
      <label for="urlVideo">Pegar URL del Video <em>(Desde Youtube)</em></label>
      <input type="text" name="urlVideo" class="form-control">
    </div>

      <div class="form-group mb-5">
        <button type="submit" class="btn btn-primary  btn-lg btn-block">Registrar Video</button>
    </div>

  </form>
  </div>
</section>

<br><br>
<br><br>
  <?php 
   require("database.php");
    $sqlVideo   = ("SELECT * FROM videos ORDER BY id DESC ");
    $queryVideo = mysqli_query($con, $sqlVideo);

  ?>

<h2 class="text-center mt-5 mb-3">Mis Videos de Youtube</h2>
  <div class="table-responsive">
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>Titulo Video</th>
          <th class="text-center">Video</th>
           <th>Acción</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while ($dataVideo = mysqli_fetch_array($queryVideo)) { ?>
        <tr>
          <td><?php  echo $dataVideo['nombreVideo']; ?></td>
          <td>
            <iframe width="253" height="200" src="<?php echo $dataVideo['urlVideo']; ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </td>
          <td>
            <a href="deleteVideoYoutube.php?idVideo=<?php echo $dataVideo['id']; ?>" class="btn btn-danger" onclick="return confirm('Estás seguro que deseas eliminar el Video?');">Borrar video</a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

</div>




</body>
</html>