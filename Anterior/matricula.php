<?php 

// Conexión con el servidor de la base de datos
// La variable mysqli: 
$mysqli = new mysqli("127.0.0.1", "hugo", "hugo", "colegios", 3306);
if ($mysqli->connect_errno) {
    die("Error conectando con la base de datos.");
}

$nif = $_POST['nif'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$cod_materia = $_POST['materia'];
$anio = $_POST['anio'];

$sentencia = $mysqli->prepare("CALL matriculacion(?,?,?,?,?)");
// los cinco parámetros se corresponden con los tipos de los campos, string y número
$sentencia->bind_param("ssssd",$nif, $nombre, $apellidos, $cod_materia, $anio);
$ok = $sentencia->execute();

if (!$ok) {
    echo "Error al matricular: (" .$sentencia->errno . ") " . $sentencia->error;
} else {
        echo "Alumno matriculado satisfactoriamente.";
}


echo '<h1>Persona Matriculada</h1>';
echo '<hr>';
echo '<ul>';
echo '<li><strong>' . strtoupper($nif) . '</strong></li>';
echo '<li>' .  ucwords(strtolower($nombre)) . '</li>';
echo '<li>' . ucwords(strtolower($apellidos)) . '</li>';
echo '<li>' .  $cod_materia . '</li>';
echo '<li><strong>' . $anio . '</strong></li>';
echo '</ul>';


?>