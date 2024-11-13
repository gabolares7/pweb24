<?php
// Función que presenta el contenido de un directorio
function mostrarDirectorio($directorio, $esMismoNivel = false) {
    // Si es el mismo nivel, usamos __DIR__, si no, subimos dos niveles
    if ($esMismoNivel) {
        $rutaCompleta = __DIR__; // Utilizamos __DIR__ directamente sin concatenar para el mismo nivel
    } else {
        $rutaCompleta = __DIR__ . '/../../' . $directorio; 
    }


    // Verificamos si la ruta es válida
    if (is_dir($rutaCompleta)) {
        $archivos = scandir($rutaCompleta); // Usamos scandir() para listar los archivos
        if ($archivos !== false) {
            echo "<ul>";
            foreach ($archivos as $archivo) {
                // Ignorar los directorios especiales . y ..
                if ($archivo != "." && $archivo != "..") {
                    // Si es un directorio, indicarlo
                    if (is_dir($rutaCompleta . '/' . $archivo)) {
                        echo "<li>$archivo (dir)</li>";
                    } else {
                        echo "<li>$archivo</li>";
                    }
                }
            }
            echo "</ul>";
        } else {
            echo "No se puede abrir el directorio: $directorio<br>";
        }
    } else {
        echo "La ruta no es válida: $directorio<br>";
    }
}

// Mostrar el contenido de los directorios
echo "<h2>Contenido de la carpeta public:</h2>";
mostrarDirectorio('public');

echo "<h2>Contenido de la carpeta practica:</h2>";
mostrarDirectorio('practica');

echo "<h2>Contenido de la carpeta misPhp:</h2>";
mostrarDirectorio('misPhp', true); // Aquí pasamos true ya que misPhp está en el mismo nivel
?>
