<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (isset($_SESSION["listadoClientes"])) {
    //si existe la variable de session listadoClientes asigno su contenido a aClientes 
    $aClientes = $_SESSION["listadoClientes"];
} else {
    $aClientes = array();
}



if ($_POST) {
    if (isset($_POST["btnEnviar"])) {
        //Si hace click en Enviar:
        //asiganamos en variables los datos que vienen del formulario.-
        $nombre = $_POST["txtNombre"];
        $dni = $_POST["txtDni"];
        $telefono = $_POST["txtTelefono"];
        $edad = $_POST["txtEdad"];

        //creamos un array que contendra el listado de clientes
        $aClientes[] = array(
            "nombre" => $nombre,
            "dni" => $dni,
            "telefono" => $telefono,
            "edad" => $edad
        );
        //Actualiza el contenido de variable de session.
        $_SESSION["listadoClientes"] = $aClientes;
    }

    //SI HACE CLICK EN ELIMINAR: 
    // session_destroy();
    if (isset($_POST["btnBorrar"])) {

        session_destroy();
        $aClientes = array();
    }
}
//pregunta si viene pos en la query string
if (isset($_GET["pos"])) {
    //Recupero el dato que viene de query string via get:
    $pos = $_GET["pos"];

    //Elimina la posicion del array indicada:
    unset($aClientes[$pos]);

    //Actualizo l avariable de session con el array actualizado
    $_SESSION["listadoClientes"] = $aClientes;
    header("Location: clientes_session.php");
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtEdad">Edad:</label>
                        <input type="text" name="txtEdad" id="txtEdad" class="form-control">
                    </div>
                    <div>
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn btn-primary">Enviar</button> <button name="btnBorrar" id="btnBorrar" type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>

            </div>
            <div class="col-6 offset-1">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre:</th>
                            <th>DNI:</th>
                            <th>Telefono:</th>
                            <th>Edad:</th>
                            <th>Acciones:</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aClientes as $pos => $cliente) : ?>

                            <tr>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["dni"]; ?></td>
                                <td><?php echo $cliente["telefono"]; ?> </td>
                                <td><?php echo $cliente["edad"]; ?>
                                <td><a href="clientes_session.php?pos=<?php echo $pos; ?>"><i class="bi bi-trash"></i></a></td>


                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

            </div>
        </div>


    </main>

</body>

</html>