<?php

    include("conexion.php");

    $tabla = mysqli_query($mysqli , 'SELECT * FROM alumnos');
    echo "<h1>Listados de Alumnos</h1>";
    echo "<hr>";
    while($obtener_filas=mysqli_fetch_array($tabla)){
        echo 'NIF :',     $nif= $obtener_filas['nif'],' ';
        echo 'Nombre :', $nombre= $obtener_filas['nombre'],' '; 
        echo 'apellidos :', $apellido= $obtener_filas['apellidos']; 
        echo '<br>';

    }
    mysqli_free_result($tabla);
    mysqli_close($mysqli);
?>

