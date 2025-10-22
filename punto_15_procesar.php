<?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$pizzas = $_POST['pizzas'] ?? [];
$cant = $_POST['cant'] ?? [];

$archivo = fopen("pedidos.txt", "a");

fwrite($archivo, "Pedido de $nombre\nDirección: $direccion\n");
foreach ($pizzas as $tipo => $valor) {
    fwrite($archivo, ucfirst($tipo) . ": " . $cant[$tipo] . "\n");
}
fwrite($archivo, "-------------------------------\n");
fclose($archivo);

echo "Pedido registrado correctamente.";
?>
<br><br><a href="punto15.php">Volver</a>
