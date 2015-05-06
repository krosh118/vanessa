<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$db = "sigepsa";

$con = mysqli_connect($servidor,$usuario,$password,$db);

// Comprobamos la conexión
if (mysqli_connect_errno()){
    
  echo "No se ha podido conectar a MySQL: " . mysqli_connect_error();
  
}

?>