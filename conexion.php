<?php
$servidor = "127.0.0.1";
$usuario = "root";
$pass = "root";
$bdatos= "colegios";
$puerto = 3306;

$mysqli = new mysqli($servidor, $usuario, $pass, $bdatos, $puerto);
if ($mysqli->connect_errno) {
    die("Error conectando con la base de datos.");
}

?>
