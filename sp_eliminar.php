<?php

    $id = $_GET['id'];

    $conex = mysqli_connect("localhost","root","","php_login_database_tmm_vs");
    $sql = "DELETE FROM videos where id like $id";
    $rta = mysqli_query($conex, $sql);
    if(!$rta){
        echo "¡No se eliminó!";
    }else{
        header("Location: contenido.php");
    }
?>