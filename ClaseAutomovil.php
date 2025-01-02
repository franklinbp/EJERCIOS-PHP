<?php
class ClaseAutomovil {
    public $color;
    public $marca;
    public $km;

    public function __construct($color, $marca, $km) {
        $this->color = $color;
        $this->marca = $marca;
        $this->km = $km;
    }
}

// Crear un objeto de ClaseAutomovil
$auto = new ClaseAutomovil("Rojo", "Toyota", 12000);

// Mostrar los valores de los atributos
echo "Color: {$auto->color}, Marca: {$auto->marca}, Kilometraje: {$auto->km}\n";
?>

