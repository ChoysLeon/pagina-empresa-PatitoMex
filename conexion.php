<?php

    $conexion = new mysqli("localhost", "root", "", "patitos");
    if($conexion){
        echo "";
    }else{
        echo "No se ha conectado";
    }
?>