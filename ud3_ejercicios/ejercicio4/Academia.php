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

class Profesor extends Persoa
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

    public function calcularSoldo($horas, $precio = 16)
    {
        return $horas * $precio;
    }

    public function engadirBaile($nombre, $edad = 8)
    {
        $baile = new Baile($nombre, $edad);
        array_push($this->bailes, $baile);

        // foreach ($this->bailes as $baile) {
        //     if(!$baile->nombre == $nombre) {
        //     } else {
        //         echo 'Error, ese baile ya lo imparte';
        //     }
        // }
    }

    public function eliminarBaile()
    {

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

$alumno1 = new Alumno('Marta', 'Gómez Vieites', '666333555');
$profesor1 = new Profesor('Diego', 'García Fernández', '654321789', '74859675L');

echo 'ALUMNO 1:<br>';
$alumno1->verInformacion();
echo '<br>';
$alumno1->numeroClases = 2;
echo 'Cantidad a pagar: ';
$alumno1->aPagar();
echo '<br><br>';

echo 'PROFESOR 1:<br>';
$profesor1->verInformacion();
$profesor1->engadirBaile('Salsa', 12);
$profesor1->engadirBaile('Bachata');
$profesor1->engadirBaile('Bachata');


echo '<br>';
$profesor1->bailesImpartidos();

var_dump($profesor1->bailes);