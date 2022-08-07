<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aAlumnos= array();
$aAlumnos[] = array("nombre" =>"Ana Valle", "notas" => array(7, 8) );
$aAlumnos[] = array("nombre" =>"Juan Perez ", "notas" => array(4, 6) );
$aAlumnos[] = array("nombre" =>"Gonzalo Roldan", "notas" => array(3, 9) );
$aAlumnos[] = array("nombre" =>"Juan Cruz", "notas" => array(5, 7) );

function promediar($aNumeros){
    $suma = 0;
    foreach ($aNumeros as $numero){
        $suma= $suma + $numero;
    }

    return $suma / count($aNumeros);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Actas</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center pt-3 mt-3">
                <h1>ACTAS</h1>

            </div>
        </div>
        <table class="table table-hover border mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Alumno</th>
                    <th>Nota1</th>
                    <th>Nota2</th>
                    <th>Promedio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($aAlumnos as $pos => $alumno){ ?>
                <tr>
                    <td><?php echo $pos ?></td>
                    <td><?php echo $alumno["nombre"]; ?></td>
                    <td><?php echo $alumno["notas"][0]; ?></td>
                    <td><?php echo $alumno["notas"][1]; ?></td>
                    <td><?php echo promediar($alumno["notas"]); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="row">
            <div class="col-12">
                <h1>Promedio de la cursada: <?php echo promediar($alumno["notas"]) ;  ?></h1>
            </div>
        </div>

    

    </main>
    
</body>
</html>