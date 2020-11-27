<?php
try{
$conexion = new PDO('mysql:host=localhost;dbmame=yorjanis', 'user_yorjanis', '12345');
echo"Conexion exito a la base de datos";
}catch(PDOExeption $e){
print "Error: " .$e->getMessage()."</br>";
die();
}

$conexion = null;


?>