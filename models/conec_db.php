<?php

function conectar (){
   

$username="root";
$password= "jc271181";
$servername="localhost";
$db= "tucson";
$con=mysql_connect($servername,$username,$password) or die ("Error Conexion".mysql_error());
mysql_select_db($db,$con);

return $con;
}

?>
