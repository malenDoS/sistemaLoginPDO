<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        //Para cerrar sesión, la primero es reanudar la sesión.
        session_start();
        //Se usa el método session_destroy para cerrar la sesión.
        session_destroy();
        //Redirijo al usuario a la página de login.
        header("location:formulario.html");
        ?>
    </body>
</html>
