<?php
    include("conexion.php");
    $ID_Producto=$_REQUEST['ID_Producto'];
    $NombreProducto =$_POST['NombreProducto'];
    $ID_Proveedor=$_POST['ID_Proveedor'];
    $FechaEntrada=$_POST['FechaEntrada'];
    $CantidadProducto=$_POST['CantidadProducto'];
    $CostoOrigen = $_POST['CostoOrigen'];
    $query="UPDATE altaproductos SET ID_Producto='$ID_Producto', NombreProducto='$NombreProducto', ID_Proveedor='$ID_Proveedor', FechaEntrada='$FechaEntrada', CantidadProducto='$CantidadProducto', CostoOrigen='$CostoOrigen' WHERE ID_Producto='$ID_Producto'";
    $resultado =$conexion->query($query);

    if ($resultado) {
        header("Location: tabla.php");
    }else{
        echo "Falla en la inserción de datos";
    }
