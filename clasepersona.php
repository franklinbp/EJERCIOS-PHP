<?php
class ClasePersona {
    private $nombre;
    private $edad;

    public function inicializar() {
        echo "Ingrese el nombre: ";
        $this->nombre = trim(fgets(STDIN));
        echo "Ingrese la edad: ";
        $this->edad = intval(trim(fgets(STDIN)));
    }

    public function imprimir() {
        echo "Nombre: " . $this->nombre . "\n";
        echo "Edad: " . $this->edad . "\n";
    }

    public function esMayorEdad() {
        if ($this->edad >= 18) {
            echo $this->nombre . " es mayor de edad.\n";
        } else {
            echo $this->nombre . " no es mayor de edad.\n";
        }
    }
}

// Crear y usar un objeto de ClasePersona
$persona = new ClasePersona();
$persona->inicializar();
$persona->imprimir();
$persona->esMayorEdad();
?>
