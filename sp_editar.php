<?php

    $id = $_POST['id'];
    $nombreVideo = $_POST['nombreVideo'];
    $urlVideo = $_POST['urlVideo'];
    $comentario = $_POST['comentario'];


    $conex = mysqli_connect("localhost","root","","php_login_database_tmm_vs");
    $sql = "UPDATE videos set nombreVideo='$nombreVideo', urlVideo='$urlVideo', comentario='$comentario' where id like $id";
    $rta = mysqli_query($conex, $sql);
    if(!$rta){
        echo "¡No se actualizó!";
    }else{
        header("Location: contenido.php");
    }
?>