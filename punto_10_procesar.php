<?php
$nombre = $_POST['nombre'];
$nivel = $_POST['nivel'];

switch($nivel) {
    case '1': $texto = "no tiene estudios."; break;
    case '2': $texto = "posee estudios primarios."; break;
    case '3': $texto = "posee estudios secundarios."; break;
}
echo "$nombre $texto";
?>
<br><br><a href="punto10.php">Volver</a>
