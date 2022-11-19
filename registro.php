<?php
// coneccion a la base de datos
include_once('db.php');
// recibo todos los datos del formulario
// primero crear las variables que resivira php
$codigo=$_POST['usuario'];
$nombres=$_POST['nombres'];
$apellido=$_POST['apellidos'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];



// hago la coneccion a la base de datos mediante consultas 
$conectar=conn(); // ejecuto la coneccion que se establecio en db.php
// ahora are la consulta

$sql="INSERT INTO usuario VALUES ('$codigo','$nombres','$apellido','$correo','$direccion','$telefono')";
$resul = mysqli_query($conectar, $sql) or trigger_error("query failed sql - error:".mysqli_error($conectar),E_USER_ERROR);

echo "se ha registrado correctamente favor volver atras para seguir";

?>