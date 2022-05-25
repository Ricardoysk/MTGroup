<?php
    include("database.php");
    $con=conectar();

    $id=$_POST['id'];
    $nombreVideo=$_POST['nombreVideo'];
    $urlVideo=$_POST['urlVideo'];
    $comentario=$_POST['comentario'];

    $sql="INSERT INTO videos VALUES('$id','$nombreVideo','$urlVideo','$comentario')";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }else{
        echo ("");
    }

?>
