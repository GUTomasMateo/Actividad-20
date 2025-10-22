<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Punto 12</title></head>
<body>
<h2>Punto 12 - Ingresos mensuales</h2>
<form method="post" action="punto12_procesar.php">
    Nombre: <input type="text" name="nombre" required><br>
    Ingreso mensual:
    <select name="ingreso" required>
        <option value="1">1 - 1000</option>
        <option value="2">1001 - 3000</option>
        <option value="3">Más de 3000</option>
    </select>
    <br><input type="submit" value="Enviar">
</form>
</body>
</html>
