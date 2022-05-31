<?php

    $nombreVideo = $_POST['nombreVideo'];
    $urlVideo = $_POST['urlVideo'];
    $comentario = $_POST['comentario'];


    $conex = mysqli_connect("localhost","root","","php_login_database_tmm_vs");
    $sql = "INSERT INTO videos(nombreVideo, urlVideo, comentario) VALUES('$nombreVideo','$urlVideo','$comentario')";
    $rta = mysqli_query($conex, $sql);
    if(!$rta){
        echo "¡No se inserto!";
    }else{
        header("Location: contenido.php");
    }
?>