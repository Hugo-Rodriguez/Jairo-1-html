<?php 

// Conexión con el servidor de la base de datos
include("conexion.php");

$codigo = strtoupper($_POST['codigo']);
$nombre = ucwords(strtolower($_POST['nombre']));

$sentencia = $mysqli->prepare("CALL IngresoMateria(?,?)");
// los tres parámetros se corresponden con los tipos de los campos, string 
$sentencia->bind_param("ss",$codigo, $nombre);
$ok = $sentencia->execute();

if (!$ok) {
    echo "Error al Ingresar la Materia: (" .$sentencia->errno . ") " . $sentencia->error;
} else {
        echo "Materia ingresada satisfactoriamente....";
}


echo '<h1>Materia dada de Alta</h1>';
echo '<hr>';
echo '<ul>';
echo '<li><strong>' . strtoupper($codigo) . '</strong></li>';
echo '<li>' .  ucwords(strtolower($nombre)) . '</li>';
echo '</ul>';


?>