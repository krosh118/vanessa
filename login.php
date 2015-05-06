<?php

require_once './conexion/conexion.php';

session_start();

$nombre = $_POST['name'];
$pass = $_POST['pwd'];
$qry = "SELECT id, nombre, rol FROM usuario WHERE nombre = '" . $nombre . "' AND password = '" . $pass . "';";
$res = mysqli_query($con, $qry);
$num_row = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);
if ($num_row == 1) {
    echo 'true';
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['rol'] = $row['rol'];
} else {

    echo 'false';
}