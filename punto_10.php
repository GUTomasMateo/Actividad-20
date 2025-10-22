<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Punto 10</title></head>
<body>
<h2>Punto 10 - Nivel de estudios</h2>
<form method="post" action="punto10_procesar.php">
    Nombre: <input type="text" name="nombre" required><br>
    Nivel de estudios:<br>
    <input type="radio" name="nivel" value="1" required> Sin estudios<br>
    <input type="radio" name="nivel" value="2"> Primarios<br>
    <input type="radio" name="nivel" value="3"> Secundarios<br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>
