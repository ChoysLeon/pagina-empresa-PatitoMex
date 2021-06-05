<?php
session_start();

$Correo=$_POST['Correo'];
$Contraseña=$_POST['Contraseña'];
include("conexion.php");
$validar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo ='$Correo' AND Contraseña ='$Contraseña' ");

if ($resultado = mysqli_fetch_array($validar)) {
    $_SESSION['Correo'] = $Correo;
    header("Location: index.php");
    echo 'Correo y contraseña correctos... Bienvenid@';
}
else{
    header("Location: login.php");
    echo 'ERROR DE AUTENTICACIÓN';
}
?>