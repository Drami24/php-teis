<?php

class Academia
{
    const NOMBRE = 'Salón de Baile Teis';
    public $profesores = array();
    public $alumnos = array();
}

    
class Persoa
{
    protected $nombre;
    protected $apellidos;
    protected $movil;

    public function __construct($nombre, $apellidos, $movil)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->movil = $movil;
    }

    public function __get($atributo)
    {
        if (property_exists(__CLASS__, $atributo)) {
            return $this->$atributo;
        }
        return "El atributo $atributo no existe";
    }

    public function __set($atributo, $valor)
    {
        if (property_exists(__CLASS__, $atributo)) {
            $this->$atributo = $valor;
        } else {
            echo "El atributo $atributo no existe";
        }
    }

    public function verInformacion()
    {
        echo "$this->nombre $this->apellidos ($this->movil)";
    }

}

final class Alumno extends Persoa
{
    private $numeroClases;

    public function __construct($nombre, $apellidos, $movil)
    {
        parent::__construct($nombre, $apellidos, $movil);
    }

    public function __get($atributo)
    {
        if (property_exists(__CLASS__, $atributo)) {
            return $this->$atributo;
        }
        return "El atributo $atributo no existe";
    }

    public function __set($atributo, $valor)
    {
        if (property_exists(__CLASS__, $atributo)) {
            $this->$atributo = $valor;
        } else {
            echo "El atributo $atributo no existe";
        }
    }

    public function aPagar()
    {
        if ($this->numeroClases == 1) {
            echo '20 euros';
        } else if ($this->numeroClases == 2) {
            echo '32 euros';
        } else if ($this->numeroClases > 2) {
            echo '40 euros';
        } else {
            echo 'Debe indicar previamente o número de clases';
        }
    }
}

final class Profesor extends Persoa
{
    private $dni;
    private $bailes = array();

    public function __construct($nombre, $apellidos, $movil, $dni)
    {
        parent::__construct($nombre, $apellidos, $movil);
        $this->dni = $dni;
    }

    public function __get($atributo)
    {
        if (property_exists(__CLASS__, $atributo)) {
            return $this->$atributo;
        }
        return "El atributo $atributo no existe";
    }

    public function __set($atributo, $valor)
    {
        if (property_exists(__CLASS__, $atributo)) {
            $this->$atributo = $valor;
        } else {
            echo "El atributo $atributo no existe";
        }
    }

    public function verInformacion()
    {
        echo "$this->nombre $this->apellidos ($this->movil) $this->dni";
    }

    public function calcularSoldo($sesiones, $precio = 16)
    {
        return $sesiones * $precio;
    }

    public function engadirBaile($nombre, $edad = 8)
    {
        $repetido = false;
        foreach ($this->bailes as $baile) {
            if($baile->nombre == $nombre) {
                $repetido = true;
                echo 'El profesor ya imparte ' . $baile->nombre;
            }
        }
        if (!$repetido){
            $nuevoBaile = new Baile($nombre, $edad);
            array_push($this->bailes, $nuevoBaile);
        }
    }

    public function eliminarBaile($nombreBaile)
    {
        foreach ($this->bailes as $key => $value) {
            if($value->nombre == $nombreBaile) {
                unset($this->bailes[$key]);
            }
        }
    }

    public function bailesImpartidos()
    {
        foreach ($this->bailes as $baile) {
            echo $baile->nombre . ' (idade min: ' . $baile->edadMinima . ' anos)';
            echo '<br>';
        }
    }
}

class Baile
{
    private $nombre;
    private $edadMinima;

    public function __construct($nombre, $edadMinima)
    {
        $this->nombre = $nombre;
        $this->edadMinima = $edadMinima;
    }

    public function __get($atributo)
    {
        if (property_exists(__CLASS__, $atributo)) {
            return $this->$atributo;
        }
        return "El atributo $atributo no existe";
    }

    public function __set($atributo, $valor)
    {
        if (property_exists(__CLASS__, $atributo)) {
            $this->$atributo = $valor;
        } else {
            echo "El atributo $atributo no existe";
        }
    }

}

$academia = new Academia();
$profesor1 = new Profesor('Fran', 'García Fernández', 654582395, '35368106K');
$profesor2 = new Profesor('Emma', 'García Rey', 635988421, '74566852A');
array_push($academia->profesores, $profesor1, $profesor2);
// var_dump($academia->profesores);

$profesor1->engadirBaile('Afro');
$profesor1->engadirBaile('Tango', 12);
$profesor1->engadirBaile('HIP HOP');
$profesor1->engadirBaile('Afro', 9);
echo '<br><br>';
//var_dump($profesor1->bailes);

$alumno1 = new Alumno('Jose Ramón', 'Vieites Romay', 685221496);
$alumno2 = new Alumno('Araceli', 'Lores García', 658741698);
array_push($academia->alumnos, $alumno1, $alumno2);

echo 'ACADEMIA<br>';
echo Academia::NOMBRE;
echo '<br><br>';

echo 'PROFESOR<br>';
echo $profesor1->verInformacion() . '<br>';
echo 'El sueldo del profesor es ' . $profesor1->calcularSoldo(18, 25) . ' euros<br>';
echo 'Bailes impartidos:<br>';
$profesor1->bailesImpartidos();
echo '<br>';

echo 'ALUMNOS<br>';
echo $alumno1->verInformacion() . '<br>';
$alumno1->numeroClases = 2;
echo 'Cuota a pagar: ';
$alumno1->aPagar();
echo '<br>';

echo $alumno2->verInformacion() . '<br>';
$alumno2->numeroClases = 3;
echo 'Cuota a pagar: ';
$alumno2->aPagar();
echo '<br><br>';

echo 'Bailes Profesor (eliminar baile Afro)<br>';
$profesor1->eliminarBaile('Afro');
//var_dump($profesor1->bailes);
$profesor1->bailesImpartidos();