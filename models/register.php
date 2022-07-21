<?php


include("conec_db.php");

$con=conectar();

if ($conex) {
    echo "conexion correcta"; 
} else {
    echo "conexion incorrecta";
}


?>