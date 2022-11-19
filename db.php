<?php
// configuracion para acceder a la data base
function conn(){
$hostname ='localhost';
$usuariodb ='root';
$passworddb ='';
$dbname = 'valentin';

// generando la coneccion con el servidor
$conectar=mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);
return $conectar;






}

?>