<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



class Persona {
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

    public function imprimir(){}
    public function __construct()
    {
        
    }
    
    public function setDni($dni){ $this->dni = $dni; }
    public function getDni(){ return $this->dni; }

    public function setNombre($nombre){ $this->nombre = $nombre;}
    public function getNombre(){ return $this->nombre; }
    
    public function setNacionalidad($nacionalidad){ $this->nacionalidad = $nacionalidad; }
    public function getNacionalidad(){ return $this->nacionalidad; }
    
    public function setEdad($edad){ $this->edad = $edad; }
    public function getEdad(){ return $this->edad; }

}


class Alumno extends Persona{
    public $legajo;
    public $notaPortfolio;
    public $notaPhp;
    public $notaProyecto;


    public function __construct()
    {
        $this->notaPortfolio=0.0;
        $this->notaPhp=0.0;
        $this->notaProyecto=0.0;
    }
    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    public function imprimir(){
        echo "DNI: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
        echo "Nota Portfolio: " . $this->notaPortfolio . "<br>";
        echo "Nota PHP: " . $this->notaPhp . "<br>";
        echo "Nota Proyectos: " . $this->notaProyecto . "<br>";
        echo "Promedio : "  . number_format($this->calcularPromedio(), 2, ",", ".") . "<br><br>";
    }
    public function calcularPromedio(){
        $promedio= 0;

        $promedio = ($this->notaPhp + $this->notaPortfolio+ $this->notaProyecto )/3;

        return $promedio;
    }

   

}

class Docente extends Persona{
    public $especialidad;
    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_ECO = "Economía aplicada";
    const ESPECIALIDAD_BBDD = "Base de datos";

    
    public function imprimir(){}
    public function imprimirEspecialidadesHabilitadas(){
        echo "Un docente puede tener las sisguentes especialidades : <br>";
        echo "Especialidad 1 : ". self::ESPECIALIDAD_WP . " <br>";
        echo "Especialidad 2 : ". self::ESPECIALIDAD_ECO . " <br>";
        echo "Especialidad 3 : ". self::ESPECIALIDAD_BBDD . " <br>";
    }


}


$alumno1 = new Alumno();
$alumno1->notaPortfolio= 6;
$alumno1->notaPhp=8; 
$alumno1->notaProyecto= 7;
$alumno1->dni= "39658852";
$alumno1->nombre= "Ana";
$alumno1->imprimir();

$alumno2 = new Alumno();
$alumno2->notaPortfolio= 5;
$alumno2->notaPhp=4; 
$alumno2->notaProyecto= 9;
$alumno2->dni= "58471969";
$alumno2->nombre= "Jose Luis";
$alumno2->imprimir();

$docente1 = new Docente();
$docente1-> imprimirEspecialidadesHabilitadas();








?>
//persona ?
public function setDni($dni){ $this->dni = $dni; }
    public function getDni(){ return $this->dni; }

    public function setNombre($nombre){ $this->nombre = $nombre;}
    public function getNombre(){ return $this->nombre; }
    
    public function setNacionalidad($nacionalidad){ $this->nacionalidad = $nacionalidad; }
    public function getNacionalidad(){ return $this->nacionalidad; }
    
    public function setEdad($edad){ $this->edad = $edad; }
    public function getEdad(){ return $this->edad; }







    //alumno 
    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

