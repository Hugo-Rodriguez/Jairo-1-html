<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
</head>

<body>
    <?php include "navbar.php";?>

    <div class="container mt-1 col-md-10">
        <div class="jumbotron">
            <h1 class="display-5">Altas de Alumnos</h1>
            <hr class="my-2">
        </div>



        <form action="procesos/alumnos.php" method="POST">
            <div class="form-group col-md-4">
                <label form="nif">NIF :</label>
                <input name="nif" class="form-control" type="text" placeholder="NIF ..........."">
        </div>

        <div class=" form-group col-md-8">
                <label form=" nombre">Nombre:</label>
                <input name="nombre" class="form-control" type="text" placeholder="Nombre .......">
            </div>
            <div class="form-group col-md-8">
                <label form="apellidos">Apellido:</label>
                <input name="apellidos" class="form-control" type="text" placeholder="Apellido .......">
            </div>
            <hr>
            <div class="row">
                <div class="col-md-10">
                    <button type="submit" class="btn btn-primary mb-2">Dar de Alta</button>
                </div>
                <button type="reset" class="btn btn-danger mb-2">Deshacer</button>
                <div class="col-md-2"></div>
            </div>


        </form>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

</html>