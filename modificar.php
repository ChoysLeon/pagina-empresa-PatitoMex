<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type ="text/css" href="css/estil.css">
</head>
<body>
<div class="contenedor">
<?php

    $ID_Producto =$_REQUEST['ID_Producto'];
    include("conexion.php");

    $query="SELECT * FROM altaproductos WHERE ID_Producto ='$ID_Producto'";
    $resultado=$conexion-> query($query);
    $row=$resultado-> fetch_assoc();
?>
    <form  class="formulario" action="modificar_proceso.php?ID_Producto=<?php echo $row['ID_Producto'];?>" method="POST">
        <h1>Bienvenid@</h1>
        <br>
        <H2>Ingresa los datos de la Compra</H2>
        <br>
        <table>
            <tr>
                <td>ID del Producto:</td>
                <td>
                    <input type="text" placeholder="ID del producto" name="ID_Producto" required value="<?php echo $row['ID_Producto'];?>">
                </td>
            </tr>
            <tr>
                <td>Nombre del Producto:</td>
                <td>
                    <input type="text" placeholder="Nombre del producto" name="NombreProducto" required value="<?php echo $row['NombreProducto'];?>">
                </td>
            </tr>
            <tr>
                <td>ID del proveedor:</td>
                <td>
                    <input type="text" placeholder="ID del proveedor" name="ID_Proveedor" required value="<?php echo $row['ID_Proveedor'];?>">
                </td>
            </tr>
            <tr>
                <td>Fecha de entrada al almacen:</td>
                <td>
                    <input type="text" placeholder="Fecha de entrada" name="FechaEntrada" required value="<?php echo $row['FechaEntrada'];?>">
                </td>
            </tr>
            <tr>
                <td>Cantidad de Producto:</td>
                <td>
                    <input type="text" placeholder="Cantidad de Producto" name="CantidadProducto" required value="<?php echo $row['CantidadProducto'];?>">
                </td>
            </tr>
            <tr>
                <td>Costo de origen:</td>
                <td>
                    <input type="text" placeholder="Costo de origen" name="CostoOrigen" required value="<?php echo $row['CostoOrigen'];?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input class="boton-registro" type="submit" value="GUARDAR" name="GUARDAR" onclick="enviarFormulario()">
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>