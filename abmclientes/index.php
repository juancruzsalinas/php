<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//preguntar si existe el archivo
if(file_exists("archivo.txt")){
    

    //vamos a leerlo y almacenamos el contenido en jsonClientes
    $jsonClientes= file_get_contents("archivo.txt");

    //convertir el jsconClientes en un array llamado aClientes
    
    $aClientes = json_encode($jsonClientes, true);

} else {
// si no existe el archivo 
    //creamos un aClientes inicializado como un array vacio

    $aClientes= array();



}






if($_POST){

    $dni= trim($_POST["txtDni"]);
    $nombre= trim($_POST["txtNombre"]);
    $telefono= trim($_POST["txtTelefono"]);
    $correo= trim($_POST["txtCorreo"]);



    $aClientes[]=array("documento"=> $dni,
                        "nombre"=> $nombre,
                        "telefono"=>$telefono,
                        "correo"=> $correo
    );


    //convertir el array de clientes a jsonClientes

    $jsonClientes = json_encode($aClientes);
    



    //ALMACENAR EL STRING jsonClientes en el "archivo.txt"

    file_put_contents("archivo.txt", $jsonClientes);
}



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>ABM</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center pt-5 mt-5">
                <h1>Registro de Clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4 mt-4">
                <form action="" method="POST" enctype="multipart/form-data" class="form">
                    <div class="pb-3">
                        <label for="txtDni">DNI:</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <label for="txtTelefono">Telefono:</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <label for="txtCorreo">Correo:</label>
                        <input type="mail" name="txtCorreo" id="txtCorreo" class="form-control shadow">
                    </div>
                    <div>
                        <label for="">Archivo adjunto:</label><input type="file" name="archivo1" id="archivo1" accept=".jpeg, .png, .jpg">
                        <small>Archivos permitidos: .jpg, jpeg, .png</small>
                        
                        
                    </div>

                    <div class="mt-3">
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn btn-primary">Guardar</button> <a href="index.php" class="btn btn-danger">NUEVO</a>
                    </div>

                </form>
            </div>
            <div class="col-6 offset-1 mt-4">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Imagen:</th>
                            <th>DNI:</th>
                            <th>Nombre:</th>
                            <th>Correo:</th>
                            <th>Acciones:</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($aClientes as $cliente): ?>
                        
                        <tr>
                            
                            <td></td>
                            <td><?php echo $cliente["documento"]; ?></td>
                            <td><?php echo $cliente["nombre"]; ?></td>
                            <td><?php echo $cliente["correo"]; ?></td>
                            <td><i class="bi bi-pencil-fill"></i></td>
                            <td><i class="bi bi-trash3-fill"></i></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>

    </main>

</body>

</html>