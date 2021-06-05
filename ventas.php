<?php
$con=mysqli_connect('localhost', 'root', '', 'patitos') or die ('Error en la conexión servidor');
$sql="INSERT INTO bajaproductos VALUES ('".$_POST["ID_Venta"]."','".$_POST["ID_Producto"]."','".$_POST["FechaSalida"]."','".$_POST["CantidadProducto"]."','".$_POST["CostoVenta"]."','".$_POST["ID_Clientes"]."')";
$resultado=mysqli_query($con,$sql) or die ('Error en el query database');
mysqli_close($con);

echo'El ID de la Venta: '.$_POST["ID_Venta"];
echo'El ID del producto es: '.$_POST["ID_Producto"];
echo'La Fecha de salida es: '.$_POST["FechaSalida"];
echo'La fcantidad de producto es : '.$_POST["CantidadProducto"];
echo'El Costo de venta del producto es : '.$_POST["CostoVenta"];
echo'El ID del cliente que realizó la compra es : '.$_POST["ID_Clientes"];
