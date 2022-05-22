$(window).ready(function(){

    $('#formulario_login').on('submit', function(e){
        
        e.preventDefault();

        let usuario = $('#txt_usuario').val();
        let pass = $('#txt_contrasena').val();

        $.post('config/controlador.php', {usuario, pass}, function(data){

            data = JSON.parse(data);

            if(data == 'true'){

                location.href = 'home.php';

            }else{

                swal.fire({
                    title: 'error',
                    icon: 'error',
                    text: data
                })

            }

        });

    })

});