<?php
    include("database.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM videos WHERE id='$id'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css">
    <link rel="stylesheet" href="estilo/navegador.css">
    <title>Actualizar</title>

    <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

    <header class="header">

      <section class="flex">

         <a href="#inicio" class="logo">MTgroup.</a>

         <nav class="navbar">
            <a href="agregar.php">Agregar</a>
            <a href="contenido.php">Contenido</a>
            <a href="index.php">Cerrar Sesión</a>
         </nav>

         <div id="menu-btn" class="fas fa-bars"></div>

      </section>

   </header>

   <section class="home">

    <div>
        <div>
        <h1 class="container">Actualizar datos</h1>
        </div>
            <form class="form_f" action="update.php" method="POST">

                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">

                <input type="text" class="form_control" name="id" placeholder="N° Registro">
                    <input type="text" class="form_control" name="nombreVideo" placeholder="Nombre Video">
                    <input type="text" class="form_control" name="urlVideo" placeholder="Url Video">
                    <input type="text" class="form_control" name="comentario" placeholder="Descripción">
                    
                    <input type="submit" class="botons" value="Actualizar">
            </form>

    </div>

   </section>


   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>
</html>