<?php 

    $conex = mysqli_connect("localhost","root","","php_login_database_tmm_vs");

?>

<?php

    function conectar(){

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "php_login_database_tmm_vs";

    $conn=mysqli_connect($server,$username,$password);

    mysqli_select_db($conn,$database);

    return $conn;

}
?>