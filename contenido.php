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
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<header class="header">

      <section class="flex">

         <a href="#inicio" class="logo">MTgroup.</a>

         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="agregar.php">Agregar</a>
            <a href="index.php">Cerrar Sesión</a>
         </nav>

         <div id="menu-btn" class="fas fa-bars"></div>

      </section>

   </header>


   <section class="home" id="inicio">

<div class="row">

   <div class="content">
   <div>
        <h1 class="container">Tabla de contenido</h1>

        <table class="table-bordered table-success table-striped-columns">
  <thead>
    <tr>
      <th scope="col">N° Registro</th>
      <th scope="col">Nombre del video</th>
      <th scope="col">Url del Video</th>
      <th scope="col">Descripción</th>
    </tr>
  </thead>
  <tbody>
        <?php
            while($row=mysqli_fetch_array($query)){
        ?>
    <tr>
      <th scope="row"><?php  echo $row['id']?></th>
      <td><?php  echo $row['nombreVideo']?></td>
      <td><?php  echo $row['urlVideo']?></td>
      <td><?php  echo $row['comentario']?></td>
      <td><a class="btn btn-primary" href="actualizar.php?id=<?php echo $row['id'] ?>" role="button">Editar</a></td>
      <td><a type="button" class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">Eliminar</a></td>
    </tr>
    <?php 
        }
    ?>
  </tbody>
</table>    
</div>
   </div>

</div>

</section>

</body>
</html>