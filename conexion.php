<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbnombre = "vacunos";
$socket = "/Aopt/lampp/var/mysql/mysql.sock";

$conexion = new mysqli($server, $user, $pass, $dbnombre, null, $socket);

if ($conexion->connect_error) {
    die("Error en la conexion: " . $conexion->connect_error);
}   
?>