<?php
class Estudiante {
    public $nombre;
    public $edad;
    public $cursos;
    public $calificaciones;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->cursos = [];
        $this->calificaciones = [];
    }

    public function inscribirCurso($curso) {
        if (!in_array($curso, $this->cursos)) {
            $this->cursos[] = $curso;
            $this->calificaciones[$curso] = [];
        }
    }

    public function agregarCalificacion($curso, $nota) {
        if (isset($this->calificaciones[$curso])) {
            $this->calificaciones[$curso][] = $nota;
        } else {
            echo "El estudiante no está inscrito en el curso $curso\n";
        }
    }

    public function promedioNotas() {
        $todasLasNotas = [];
        foreach ($this->calificaciones as $notas) {
            $todasLasNotas = array_merge($todasLasNotas, $notas);
        }
        return count($todasLasNotas) > 0 ? round(array_sum($todasLasNotas) / count($todasLasNotas), 2) : "No hay calificaciones aún";
    }
}

// Crear un estudiante
$estudiante1 = new Estudiante("Carlos", 20);

$estudiante1->inscribirCurso("Matemáticas");
$estudiante1->inscribirCurso("Historia");

$estudiante1->agregarCalificacion("Matemáticas", 90);
$estudiante1->agregarCalificacion("Matemáticas", 85);
$estudiante1->agregarCalificacion("Historia", 88);

echo "Nombre: {$estudiante1->nombre}\n";
echo "Edad: {$estudiante1->edad}\n";
echo "Cursos inscritos: " . implode(", ", $estudiante1->cursos) . "\n";
echo "Promedio de notas: {$estudiante1->promedioNotas()}\n";
?>
