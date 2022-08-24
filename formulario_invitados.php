<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
//Si existe el archivo invitados lo abrimos y cargamos en una variable del tipo array los dni permitidos 
 
 if(file_exists("invitados.txt")){
    $archivo = fopen("invitados.txt","r");
    $aDocumentos = fgetcsv($archivo, 0, ",");
    

     }else{
        //Sino el array queda como vacio
        $aDocumentos= array();
    }
if($_POST){
    $documento = trim($_REQUEST["txtDni"]);
    if(isset($_POST["btnInvitado"])){
        
        //Si el DNI ingresado se encuentra en la lista se mostrara un mensaje de bienvenido 
        if(in_array($documento,$aDocumentos)){
            $aMensaje = array ("texto"=> "Bienvenido $documento a la fiesta!",
                                "estado"=> "success"
                            );
        
        
        }else {
            // Sino un mensaje de no se encuentra en la lista de invitados.
            $aMensaje= array("texto"=>"No se encuentra en la lista de invitados.",
                             "estado"=>"danger");
        }
    }    

    if(isset($_POST["btnVip"])){
        $codigo = trim($_REQUEST["txtCodigo"]);
        //Si el codigo es verde entonces se mostrara Su codigo de acceso es....
        if ($codigo == "verde"){
        $aMensaje= array("texto"=>"Su codigo de acceso es". rand(1000, 9999),
                        "estado"=> "success");
        
        }else{
        //Sino Ud. no tiene pase vip.
        $aMensaje=array("texto"=>"Ud no tiene pase VIP.",
                        "estado"=> "danger");
    
        }

    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Formulario Invitados</title>
    </head>

    <body>
        <main class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Lista de invitados</h1>
                </div>
                        <?php if(isset($aMensaje)): ?>
                <div class="col-12">
                    <div class="alert alert-<?php echo $aMensaje["estado"]; ?>" role="alert">
                        <?php echo $aMensaje["texto"]; ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-12">
                    <p>Complete el siguente formulario:</p>

                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-3">
                    <form action="" method="POST" class="form">
                        <div class="mt-2">

                            <label for="txtDni">Ingrese el DNI</label>
                            <input type="text" name="txtDni" id="txtDni" class="form-control">
                            <button type="submit" name="btnInvitado" id="btnInvitado" class="btn btn-primary mt-1">Verificar Invitado</button>
                        </div>
                        <div class="mt-2">
                            <label for="txtCodigo">Ingresa el codigo secreto para el pase VIP:</label>
                            <input type="text" name="txtCodigo" id="txtCodigo" class="form-control">
                            <button type="submit" name="btnVip" id="btnVip" class="btn btn-primary mt-1">Verificar Codigo</button>
                            
                        </div>

                    </form>
                </div>
            </div>

        </main>

    </body>

</html>