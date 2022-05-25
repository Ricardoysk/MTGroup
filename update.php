<?php
    include("database.php");
    $con=conectar();

    $id=$_POST['id'];
    $nombreVideo=$_POST['nombreVideo'];
    $urlVideo=$_POST['urlVideo'];
    $comentario=$_POST['comentario'];

    $sql="UPDATE videos SET nombreVideo='$nombreVideo',urlVideo='$urlVideo',comentario='$comentario' WHERE id='$id'";
    $query=mysqli_query($con,$sql);
        if($query){
            Header("Location: contenido.php");
        }
?>