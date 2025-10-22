<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

echo "El nombre ingresado es: $nombre<br>";
echo "La edad ingresada es: $edad<br>";

if ($edad >= 18) {
    echo "$nombre es mayor de edad.";
} else {
    echo "$nombre es menor de edad.";
}
?>
<br><br><a href="punto9.php">Volver</a>
