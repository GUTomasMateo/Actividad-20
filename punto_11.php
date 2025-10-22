<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Punto 11</title></head>
<body>
<h2>Punto 11 - Deportes</h2>
<form method="post" action="punto11_procesar.php">
    Nombre: <input type="text" name="nombre" required><br>
    Deportes:<br>
    <input type="checkbox" name="deportes[]" value="Fútbol"> Fútbol<br>
    <input type="checkbox" name="deportes[]" value="Básquet"> Básquet<br>
    <input type="checkbox" name="deportes[]" value="Tenis"> Tenis<br>
    <input type="checkbox" name="deportes[]" value="Vóley"> Vóley<br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>
