<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
      <a href="home.php">Inicio</a>
      <a href="contenido.php">Contenido</a>
      <a href="index.php">Cerrar sesión</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

</header>

    <section class="home">
    <div>
        <form action="buscar.php" method="POST">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>

    <div>
        <table class="table table-hover table-dark">
            <tr>
                <td>ID</td>
                <td>Nombre Video</td>
                <td>video</td>
                <td>Comentario</td>
                <td>Opciones</td>
            </tr>
            <?php

            $conex = mysqli_connect("localhost","root","","php_login_database_tmm_vs");
            $sql = "SELECT id, nombreVideo, urlVideo, comentario FROM videos order by id desc";
            $rta = mysqli_query($conex, $sql);
            
            while ($mostrar = mysqli_fetch_row($rta)){
                ?>
            <tr>
                <td><?php echo $mostrar['0'] ?></td>
                <td><?php echo $mostrar['1'] ?></td>
                <td><?php echo $mostrar['2'] ?></td>
                <td><?php echo $mostrar['3'] ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $mostrar['0']?>
                    ">Editar</a>
                    <a href="sp_eliminar.php? id=<?php echo $mostrar['0'] ?>">Eliminar</a>
            </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    </section>

    <footer class="footer">

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

</footer>

</body>
</html>