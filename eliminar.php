<?php
    include("conexion.php");
    $ID_Producto=$_REQUEST['ID_Producto'];
    $query="DELETE FROM altaproductos WHERE ID_Producto='$ID_Producto'";
    $resultado =$conexion->query($query);

    if ($resultado) {
        header("Location: tabla.php");
    }else{
        echo "Falla en la inserción de datos";
    }