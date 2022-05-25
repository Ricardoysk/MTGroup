<?php
    include("database.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="DELETE FROM videos WHERE id='$id'";
    $query=mysqli_query($con,$sql);

        if($query){
            Header("Location: contenido.php");
        }
?>