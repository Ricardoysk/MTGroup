<?php

$inc = include("database.php");
if ($inc) {
    $consulta = "SELECT * FROM videos";
    $resultado = mysqli_query($conex, $consulta);
?>



<section class="home">
    <div class="content">
        <h1>!Disfruta <span> de nuestros videos y esperamos que aprendas¡</span></h1>
    </div>
</section>
   

    <div class="row container my-5" style="margin-top: 50px !important">
    <?php


        while ($row = $resultado->fetch_array()) {
            $id = $row['id'];
            $nombreVideo = $row['nombreVideo'];
            $urlVideo = $row['urlVideo'];
            $comentario = $row['comentario'];


        ?>

<?php if ($id!='') { ?>

<section class="courses col-4 my-5">



    <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <h3 class="heading"><?php echo $nombreVideo; ?></h3>
            <br><?php echo $urlVideo; ?></br>
            <p><?php echo $comentario; ?></p>
        </div>

    </div>

</section>

<?php }?>


    <?php }
    } ?>

    </div>