<?php

class Academia
{
    const nome = 'Academia de Baile Teis';
    //array profesores
    //array alumnos
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

class Alumno extends Persoa
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
        if ($this->numeroClases === 1) {
            return '20 euros';
        } else if ($this->numeroClases === 2) {
            return '32 euros';
        } else if ($this->numeroClases > 2) {
            return '40 euros';
        } else {
            return 'Debe indicar previamente o número de clases';
        }

    }
}

class Profesor extends Persoa
{
    private $dni;

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

    public function calcularSoldo($numeroClasesMes)
    {
        return $numeroClasesMes * 16;
    }

    public function engadirBaile($baile)
    {

    }

    public function eliminarBaile($baile)
    {

    }

    public function bailesImpartidos($baile)
    {
        echo $baile->nombre;
    }
}

class Baile
{
    private $nombre;
    private $edadMinima;

    public function __construct($nombre, $edadMinima = 8)
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

$alumno1 = new Alumno('Marta', 'Gómez Vieites', '666333555');
$profesor1 = new Profesor('Diego', 'García Fernández', '654321789', '74859675L');

$alumno1->verInformacion();
$profesor1->verInformacion();
echo $profesor1->dni;
