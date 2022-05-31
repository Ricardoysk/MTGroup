<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<link rel="stylesheet" href="css/style.css">

<!-- swiper css link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
    
    <section class="home">
    <div>
        <form action="sp_insertar.php" method="post">
        <table class="table table-hover table-dark">
            <tr>
                <td>Ingresar datos:</td>
            </tr>
            <tr>
                <td>Nombre Video</td>
                <td><input type="text" name="nombreVideo" id=""></td>
            </tr>
            <tr>
                <td>Url</td>
                <td><input type="text" name="urlVideo" id=""></td>
            </tr>
            <tr>
                <td>Comentario</td>
                <td><input type="text" name="comentario" id=""></td>
            </tr>
            <td><input type="submit" value="Guardar"></td>
        </table>
        </form>
    </div>
    </section>

</body>
</html>