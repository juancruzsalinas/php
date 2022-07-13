<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$aEmpleados = array();
$aEmpleados[] = array("dni" => 33300123, "nombre" => "David Garcia", "bruto" => 85000.30);
$aEmpleados[] = array("dni" => 40874456, "nombre" => "Ana Del Valle", "bruto" => 90000);
$aEmpleados[] = array("dni" => 67567565, "nombre" => "Andres Perez", "bruto" => 100000);
$aEmpleados[] = array("dni" => 75744545, "nombre" => "Victoria Luz", "bruto" => 70000);



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Empleados</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-5">
                <h1 class="text-center">Listado de empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pt-4">
                <table class="table table-hover border">
                    <thead>

                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Sueldo</th>
                    </thead>
                    <?php
                    function calcularNeto($bruto)
                    {
                        return $bruto - ($bruto * 0.17);
                    }
                    foreach ($aEmpleados as $empleado) {


                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $empleado["dni"]; ?></td>
                                <td><?php echo mb_strtoupper($empleado["nombre"]); ?></td>


                                <td><?php $neto = calcularNeto($empleado["bruto"]);

                                    echo number_format($neto, 2, ",", "."); ?></td>
                            </tr>
                        </tbody>
                    <?php
                    }

                    ?>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12 pt-3">
                <h4>Cantidad de empleados activos: <?php echo count($aEmpleados)?></h4>
            </div>
        </div>


    </main>

</body>

</html>