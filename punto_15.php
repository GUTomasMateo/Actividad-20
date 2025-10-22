<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Punto 15</title></head>
<body>
<h2>Punto 15 - Pedido de Pizzas</h2>
<form method="post" action="punto15_procesar.php">
Nombre: <input type="text" name="nombre" required><br>
Dirección: <input type="text" name="direccion" required><br><br>

<input type="checkbox" name="pizzas[jamon]" value="1"> Jamón y Queso
Cantidad: <input type="number" name="cant[jamon]" min="0"><br>

<input type="checkbox" name="pizzas[napolitana]" value="1"> Napolitana
Cantidad: <input type="number" name="cant[napolitana]" min="0"><br>

<input type="checkbox" name="pizzas[muzzarella]" value="1"> Muzzarella
Cantidad: <input type="number" name="cant[muzzarella]" min="0"><br><br>

<input type="submit" value="Confirmar pedido">
</form>
</body>
</html>
