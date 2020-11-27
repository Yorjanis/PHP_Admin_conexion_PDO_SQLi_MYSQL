<?php

$mysqli = new mysqli('localhost','user_yorjanis', '12345', 'yorjanis');
if($mysqli->connect_errno){
echo "Error: ".$mysqli->connect_error;
}else{
echo "la conexion fue exitosa";
}
$mysqli->close();


?>