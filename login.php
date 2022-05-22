<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MTGroup</title>


   <!-- font awesome cdn link  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

   <!-- login form starts -->


      <div class="bg-light container-fluid w-100 d-flex justify-content-center align-items-center" style="height: 100vh;">
         <div class="card" style="width: 400px;">

            <h3 class="text-primary col-lg-12 text-center">Iniciar Sesión</h3>

         
            <form id="formulario_login" method="POST">
               <div class="mb-3">
                  <label for="txt_usuario" class="form-label">Usuario</label>
                  <input type="text" class="form-control" id="txt_usuario"  require="">
               </div>
               <div class="mb-3">
                  <label for="txt_contrasena" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="txt_contrasena" require="">
               </div>
               <button type="submit" class="btn btn-primary col-lg-12 text-center btn-block">Ingresar</button>
            </form>

         </div>
      </div>


   <!-- login form ends  -->


   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script src="app.js"></script>
</body>

</html>