<?php 

    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

    $data = json_decode(file_get_contents('data.json'));

    if($data->usuario == $usuario){

        if($data->pass == $pass){

            echo json_encode('true');

        }else{

            echo json_encode('La contraseña no es válida');

        }
    
    }else{

        echo json_encode('El ususario no existe');

    }


