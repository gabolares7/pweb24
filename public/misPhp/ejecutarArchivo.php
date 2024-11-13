<?php
if (isset($_POST['archivoSeleccionado']) && !empty($_POST['archivoSeleccionado'])) {
    $archivo = $_POST['archivoSeleccionado'];
    echo "La orden a ejecutar es: $archivo";
} else {
    echo "No existe ninguna orden a ejecutar";
}
?>
