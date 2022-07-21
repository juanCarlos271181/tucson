<?php

require_once("models/register.php");


$products=new products_model.php();

$matrizProductos=$productos->get_products();



require_once("views/ceramicos.php");


?>