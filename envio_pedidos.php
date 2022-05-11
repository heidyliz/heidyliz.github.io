<?php
include_once('db.php');
//RECIBO LOS DATOS DEL FORMULARIO
$name=$_POST['name'];
$surname=$_POST['surname'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$province=$_POST['province'];
$adress=$_POST['adress'];
$details=$_POST['details'];

//CONSULTA BASE DE DATOS
$conectar=connn();
$sql="INSERT INTO pedidos (name,surname,mail,phone,province,adress,details) 
VALUES ('$name', '$surname', '$mail', '$phone', '$province', '$adress', '$details')";
$resul = mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL- ERROR: ".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";
header('Location: mensaje_envio.php')
?>