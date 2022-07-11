<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPacientes= array();
$aPacientes[]= array(
    "dni"=> "33.765.012",
    "nombre"=> "Ana Acuña",
    "edad" => 45,
    "peso"=> 81.50

);

$aPacientes[]= array(
    "dni"=> "65.325.147",
    "nombre"=> "Jorge Fernandez",
    "edad" => 32,
    "peso"=> 74.50

);

$aPacientes[]= array(
    "dni"=> "14.258.965",
    "nombre"=> "Melina Rodriguez",
    "edad" => 36,
    "peso"=> 54.80

);

$aPacientes[]= array(
    "dni"=> "40.369.852",
    "nombre"=> "Federico Garcia",
    "edad" => 25,
    "peso"=> 85.40

);

$aPacientes[]= array(
    "dni"=> "35.784.154",
    "nombre"=> "Lucas Monzon",
    "edad" => 32,
    "peso"=> 74.20

);

$aPacientes[]= array(
    "dni"=> "54.658.695",
    "nombre"=> "Carla Anchorena",
    "edad" => 22,
    "peso"=> 53.50

);

$aPacientes[]= array(
    "dni"=> "25.245.879",
    "nombre"=> "Jose Hernandez",
    "edad" => 45,
    "peso"=> 69.30

);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Clinica SA</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-5">
                <h1 >Listado de pacientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pt-3">
                <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre y Apellido</th>
                        <th>Edad</th>
                        <th>Peso</th>
                    </tr>
                    <?php
                    for ($contador=0; $contador < count($aPacientes); $contador++) {

                        ?>
                    <tr>
                        <td><?php echo $aPacientes[$contador]["dni"]; ?></td>
                        <td><?php echo $aPacientes[$contador]["nombre"]; ?></td>
                        <td><?php echo $aPacientes[$contador]["edad"]; ?></td>
                        <td><?php echo $aPacientes[$contador]["peso"]; ?></td>
                    
                    </tr>
                 <?php   
                }
                ?>
                </table>
            </div>
        </div>



    </main>

    
</body>
</html>

