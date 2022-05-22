<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>

    <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">

</head>
<body>

    <!-- header section starts  -->

   <header class="header">

        <section class="flex">

            <a href="#inicio" class="logo">MTgroup.</a>

            <nav class="navbar">
                <a href="index.php">Inicio</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

        </section>

    </header>

<!-- header section ends -->


    <?php require 'partials/header.php' ?>

    <section class="home">

        <div class="login">

        <form action="" method="post">

        <?php if(!empty($message)): ?>
            <p> <?= $message ?></p>
        <?php endif; ?>

            <h1>Registrarse</h1>

            <input type="text" name="email" placeholder="Ingrese su email">
            <input type="password" name="password" placeholder="Ingrese su contraseña">
            <input type="password" name="confirm_password" placeholder="Confirme su contraseña">
            <input type="submit" value="Registrar">

        </form>

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