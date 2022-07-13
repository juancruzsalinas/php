<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$aEmpleados= array();
$aEmpleados[]= array("dni"=> 33300123,"nombre" => "David Garcia","bruto"=> 85000.30);
$aEmpleados[]= array("dni"=> 33300123,"nombre" => "David Garcia","bruto"=> 85000.30);



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
            <div class="col-12">
                <h1>Listado de empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                        <thead>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Sueldo</th>
                        </thead>
                </table>
            </div>
        </div>


    </main>
    
</body>
</html>