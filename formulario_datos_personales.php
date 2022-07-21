<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Datos Personales</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-4 ">
                <h1>Formulario de datos personales</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 pt-4">
                <form method="POST" action="resultado.php">
                    <div class="pb-3">
                        <label for="txtNombre">Nombre:*</label>
                        <input type="text" name="txtNombre" class="form-control" id="txtNombre">
                    </div>
                    <div class="pb-3">
                        <label for="txtDni">Dni:*</label>
                        <input type="text" name="txtDni" class="form-control" id="txtDni">
                    </div>
                    <div class="pb-3">
                        <label for="txtTelefono">Telefono:*</label>
                        <input type="text" name="txtTelefono" class="form-control" id="txtTelefono">
                    </div>
                    <div class="pb-3">
                        <label for="txtEdad">Edad:*</label>
                        <input type="number" name="txtEdad" class="form-control" id="txtEdad">
                    </div>
                    <div class="pb-3">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>

                </form>
            </div>
        </div>




    </main>


</body>

</html>