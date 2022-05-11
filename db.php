<?php

function connn(){
 $hostname = "localhost";
 $usuariodb = "root";
 $passworddb = "";
 $dbname = "sesion";

 // Generando la conexión con el servidor
 $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
 return $conectar;
}
?>