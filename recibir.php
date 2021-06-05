<?php
$con=mysqli_connect('localhost', 'root', '', 'patitos') or die ('Error en la conexión servidor');
$sql="INSERT INTO altaproductos VALUES ('".$_POST["ID_Producto"]."','".$_POST["NombreProducto"]."','".$_POST["ID_Proveedor"]."','".$_POST["FechaEntrada"]."','".$_POST["CantidadProducto"]."','".$_POST["CostoOrigen"]."')";
$resultado=mysqli_query($con,$sql) or die ('Error en el query database');
mysqli_close($con);

header ("Location: tabla.php");
echo'El ID del producto es: '.$_POST["ID_Producto"];
echo'El Nombre del producto es: '.$_POST["NombreProducto"];
echo'El ID del proveedor es: '.$_POST["ID_Proveedor"];
echo'La fecha de entrada del producto es: '.$_POST["FechaEntrada"];
echo'La cantidad de producto es: '.$_POST["CantidadProducto"];
echo'El Costo Origen del producto es: '.$_POST["CostoOrigen"];
