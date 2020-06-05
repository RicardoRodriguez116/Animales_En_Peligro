<?php
$nombre = $_POST['nombre'];
$edad = $_POST['animal'];
$comentario = $_POST['comentario'];
$email= $_POST['email'];
$puerto = "localhost";
$usuario = "root";
$contraseña="";
$conexion = mysql_connect ($puerto,$usuario,$contraseña);																
mysql_select_db("RecibeDatos",$conexion);
$insertar = "insert into datos(Nombre,Edad,Comentario,Email) values ('$nombre','$edad','$comentario','$email')";
mysql_query($insertar);
echo "Se han enviado los datos exitosamente"; 
?>