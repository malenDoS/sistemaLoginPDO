<!DOCTYPE html>
<html>
    <head>
        <title>Página 2</title>
    </head>
    <body>
        <?php
        //Reanudo la sesión para que la página adquiera la sesión abierta de la página anterior.
        session_start();
        //Compruebo que ha pasado por el login.
        if(!isset($_SESSION["nombreUsua"])){
            //Redirijo a la página de login
            header("location:formulario.html");
        }
        ?>
        <!--Escribo un enlace a la página de usuarios registrados-->
        <p><a href="paginaUsuariosRegistrados.php">Enlace a la página de usuarios</a></p>
    </body>
</html>
