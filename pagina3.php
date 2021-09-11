<!DOCTYPE html>
<html>
    <head>
        <title>Página 3</title>
    </head>
    <body>
        <?php
        //Reanudo la sesión
        session_start();
        //Compruebo que ha pasado por el login
        if(!isset($_SESSION["nombreUsua"])){
            //Redirijo a la página de login.
            header("location:formulario.html");
        }
        ?>
        <!--Escribo un enlace a la página de usuarios registrados-->
        <p><a href="paginaUsuariosRegistrados.php">Enlace a la página de usuarios Registrados</a></p>
    </body>
</html>
