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
    <center>
        <table bgcolor="cadetblue" border="3">
            <thread>
                <tr>
                    <th colspan="1"><a href="php/formulario.php">Nuevo</a></th>
                    <th colspan="8">Lista de productos</th>
                </tr>
            </thread>
            <tbody>
                <tr>
                    <td>ID_Producto</td>
                    <td>NombreProducto</td>
                    <td>ID_Proveedor</td>
                    <td>FechaEntrada</td>
                    <td>CantidadProducto</td>
                    <td>CostoOrigen</td>
                    <td colspan="2">Acción a realizar</td>
                </tr>
                    <?php
                    include("conexion.php");

                    $query="SELECT * FROM altaproductos";
                    $resultado=$conexion-> query($query);
                    while($row=$resultado-> fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row ['ID_Producto']?></td>
                        <td><?php echo $row ['NombreProducto']?></td>
                        <td><?php echo $row ['ID_Proveedor']?></td>
                        <td><?php echo $row ['FechaEntrada']?></td>
                        <td><?php echo $row ['CantidadProducto']?></td>
                        <td><?php echo $row ['CostoOrigen']?></td>
                        <td><a href="modificar.php?ID_Producto=<?php echo $row['ID_Producto'];?>">Modificar</a></td>
                        <td><a href="eliminar.php?ID_Producto=<?php echo $row['ID_Producto'];?>">Eliminar</a></td>
                    </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
    </center>
</body>
</html>