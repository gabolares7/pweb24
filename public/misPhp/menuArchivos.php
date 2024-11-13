<?php
// Almacenaremos los archivos con enlaces en un array para usarlos en el formulario
$archivosDisponibles = [];

// Función que presenta el contenido de un directorio
function mostrarDirectorio($directorio, $esMismoNivel = false) {
    global $archivosDisponibles; // Utilizamos la variable global para almacenar los enlaces

    if ($esMismoNivel) {
        $rutaCompleta = __DIR__;
    } else {
        $rutaCompleta = __DIR__ . '/../../' . $directorio;
    }

    echo "<h2>Contenido de la carpeta $directorio:</h2>";

    if (is_dir($rutaCompleta)) {
        $archivos = scandir($rutaCompleta);
        if ($archivos !== false) {
            echo "<ul>";
            foreach ($archivos as $archivo) {
                if ($archivo != "." && $archivo != "..") {
                    $rutaArchivo = $rutaCompleta . '/' . $archivo;

                    // Crear enlaces según el tipo de archivo
                    if (is_file($rutaArchivo)) {
                        // Archivos HTML Públicos (en el directorio 'public')
                        if ($directorio == 'public' && preg_match('/\.html$/', $archivo)) {
                            $enlace = "http://pweb24.test/" . $archivo;
                            echo "<li><a href=\"$enlace\">$archivo</a></li>";
                            $archivosDisponibles[] = $enlace;
                        }

                        // Archivos HTML Privados (en el directorio 'practica')
                        elseif ($directorio == 'practica' && preg_match('/\.html$/', $archivo)) {
                            // Obtener el nombre del archivo sin la parte "privado.html" para generar la URL limpia
                            $nombreArchivoSinPrivadoHtml = str_replace('privado.html', '', $archivo);
                            // Crear el enlace a la ruta sin "privado.html"
                            $enlace = "http://pweb24.test/paginaPersonal/" . $nombreArchivoSinPrivadoHtml;
                            echo "<li><a href=\"$enlace\">$archivo</a></li>"; // Mostrar el nombre original del archivo
                            $archivosDisponibles[] = $enlace;
}


                        // Archivos PHP (solo en 'misPhp')
                        elseif (preg_match('/\.php$/', $archivo) && $directorio == 'misPhp') {
                            $enlace = "http://pweb24.test/misPhp/" . $archivo;
                            echo "<li><a href=\"$enlace\">$archivo</a></li>";
                            $archivosDisponibles[] = $enlace;
                        } else {
                            // Otros archivos sin enlace
                            echo "<li>$archivo</li>";
                        }
                    } elseif (is_dir($rutaArchivo)) {
                        echo "<li>$archivo (dir)</li>";
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
mostrarDirectorio('public');
mostrarDirectorio('practica');
mostrarDirectorio('misPhp', true);

// Formulario para seleccionar un archivo y ejecutarlo
echo '<h3>Selecciona qué archivo quieres ejecutar</h3>';
echo '<form action="ejecutarArchivo.php" method="post">';
echo '<select name="archivoSeleccionado">';
foreach ($archivosDisponibles as $archivo) {
    echo "<option value=\"$archivo\">$archivo</option>";
}
echo '</select>';
echo '<button type="submit">Ejecutar</button>';
echo '</form>';
?>
