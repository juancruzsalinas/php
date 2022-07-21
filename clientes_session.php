<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$aClientes= array();

if (isset($_SESSION["listadoClientes"])){
    //si existe la variable de session listadoClientes asigno su contenido a aClientes 
    $aClientes= $_SESSION["listadoClientes"];
} else {
    $aClientes= array();
}



if ($_POST){

    //asiganamos en variables los datos que vienen del formulario.-
    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"]; 
    $edad = $_POST["txtEdad"];
    //creamos un array que contendra el listado de clientes
    $aClientes[] = array("nombre"=> $nombre,
                        "dni"=> $dni,
                        "telefono" => $telefono,
                        "edad" => $edad
    );
    $_SESSION["listadoClientes"] = $aClientes;
    //SI HACE CLIECK EN ELIMINAR: 
    // SESSION_DESTROY();

    //agregar para eliminar
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Session</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 mt-5 text-center">
                <h1>Listado de Clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <form action="" method="POST" class="form">
                    <div class="pb-3">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtDni">DNI:</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtTelefono">Telefono:</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtEdad">Edad:</label>
                        <input type="number" name="txtEdad" id="txtEdad" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Enviar</button> <button type="" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>

            </div>
            <div class="col-6 offset-1">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre:</th>
                            <th>DNI:</th>
                            <th>Telefono</th>
                            <th>Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aClientes as $cliente):  ?>
                        <tr>
                            <td><?php echo $cliente["nombre"]; ?></td>
                            <td><?php echo $cliente["dni"]; ?></td>
                            <td><?php echo $cliente["telefono"]; ?></td>
                            <td><?php echo $cliente["edad"];?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>


    </main>

</body>

</html>