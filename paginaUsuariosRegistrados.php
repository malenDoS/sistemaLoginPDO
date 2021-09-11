<!Doctype html>
<html>
    <head>
        <title>Página para usuarios registrados</title>
    </head>
    <body>
        <?php
        /*Para que no puedan entrar en la página de usuarios solo
         * copiando y pegando la url, antes de que aparezca el
         * contenido de la página, hay que abrir una zona php para
         * comprobar si el usuario ha escrito bien los datos en el
         * login.
         * Con un if usando el método isset, se sabe si la variable
         * superglobal guardada anteriormente es null o no, en caso
         * de que sea null, se redirije al usuario a la página de 
         * login. Primero utilizo el método session_start para
         * reanudar la sesión.
         */
        session_start();
        if(!isset($_SESSION["nombreUsua"])){
            header("location:formulario.html");
        }
        ?>
        <h1>Página para usuarios registrados</h1>
        <p><?php echo $_SESSION["nombreUsua"];?></p>
        <!--Escribo un enlace a la página 2-->
        <p><a href="pagina2.php">Enlace a la página 2</a></p>
        <!--Escribo un enlace a la página3-->
        <p><a href="pagina3.php">Enlace a la página 3</a></p>
        <!--Escribo un enlace para cerrar sesión-->
        <p><a href="CerrarSesion.php">Cerrar sesión</a></p>
    </body>
</html>
