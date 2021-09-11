<?php
//Creo una instancia del objeto PDO con los datos de conexión
try{
$base=new PDO("mysql:host=localhost; dbname=usuarioslogin","root","nloeig31416");
//Establezco los artributos de la conexión.
$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//Guardo la consulta con marcadores en una variable
$consulta="SELECT * FROM usuario WHERE nombreUsuario=:usuario AND contrasegna=:password AND dni=:identificacion";
//Preparo la conexión
$resultado=$base->prepare($consulta);
//Uso los métodos htmlentities y addslashes para evitar la inyección sql.
$usuario=htmlentities(addslashes($_POST["nombreUsuario"]));
$contrasegna=htmlentities(addslashes($_POST["contrasegna"]));
$dni=htmlentities(addslashes($_POST["dni"]));
//Se vinculan las variables con los marcadores
$resultado->bindValue(":usuario",$usuario);
$resultado->bindValue(":password",$contrasegna);
$resultado->bindValue(":identificacion",$dni);
//Ejecuto la consulta
$resultado->execute();
//Utilizo el método rowCount para saber si los datos del usuario son correctos
if($resultado->rowCount()!=0){
    //Inicio una session con el método session_start().
    session_start();
    //Guardo en la variable superglobal $_SESSION el nombre de usuario.
    $_SESSION["nombreUsua"]=$_POST["nombreUsuario"];
    //Redirijo a la página de usuarios.
    header("location:paginaUsuariosRegistrados.php");
}else{
    /*redirijo al usuario a la página del login nuevamente con la
     *  función header especificando el nombre de la página.
     */
    header("location:formulario.html");   
}
}catch(Exception $e){
    die("Revisa los datos de conexión".$e->getMessage());
}
?>