<?php

$conexion = mysqli_connect("localhost","root","","formularios");

if(!$conexion){
    die("Error de conexión");
}

$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$asunto = mysqli_real_escape_string($conexion, $_POST['asunto']);
$mensaje = mysqli_real_escape_string($conexion, $_POST['mensaje']);

$sql = "INSERT INTO registros (nombre, correo, asunto, mensaje) 
VALUES ('$nombre','$correo','$asunto','$mensaje')";

if(mysqli_query($conexion,$sql)){
    echo "Datos guardados correctamente";
}else{
    echo "Error al guardar datos";
}

?>