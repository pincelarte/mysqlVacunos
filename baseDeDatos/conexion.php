<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbnombre = "vacunoPHP";
$socket = "/opt/lampp/var/mysql/mysql.sock"; 


$conexion = new mysqli($server, $user, $pass, $dbnombre, null, $socket);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
} else {
    echo "***************************************************" . PHP_EOL; 
    echo "Conectado a la base de datos vacunos en phpmyadmin." . PHP_EOL;
    echo "***************************************************" . PHP_EOL;
}
