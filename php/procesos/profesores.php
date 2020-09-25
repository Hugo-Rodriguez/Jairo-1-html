<?php 

// Conexión con el servidor de la base de datos
include("conexion.php");

$nif = strtoupper($_POST['nif']);
$nombre = ucwords(strtolower($_POST['nombre']));
$apellidos = ucwords(strtolower($_POST['apellidos']));

$sentencia = $mysqli->prepare("CALL IngresoProfesor(?,?,?)");
// los tres parámetros se corresponden con los tipos de los campos, string 
$sentencia->bind_param("sss",$nif, $nombre, $apellidos);
$ok = $sentencia->execute();

if (!$ok) {
    echo "Error al Ingresar el Profesor: (" .$sentencia->errno . ") " . $sentencia->error;
} else {
        echo "Profesor ingresado satisfactoriamente....";
}


echo '<h1>Profesor dado de Alta</h1>';
echo '<hr>';
echo '<ul>';
echo '<li><strong>' . strtoupper($nif) . '</strong></li>';
echo '<li>' .  ucwords(strtolower($nombre)) . '</li>';
echo '<li>' . ucwords(strtolower($apellidos)) . '</li>';
echo '</ul>';


?>