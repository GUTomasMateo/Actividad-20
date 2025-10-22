<?php
$nombre = $_POST['nombre'];
$deportes = isset($_POST['deportes']) ? $_POST['deportes'] : [];

echo "Nombre: $nombre<br>";
echo "Cantidad de deportes: " . count($deportes) . "<br>";

if (count($deportes) > 0) {
    echo "Practica: " . implode(", ", $deportes);
} else {
    echo "No seleccionó ningún deporte.";
}
?>
<br><br><a href="punto11.php">Volver</a>
