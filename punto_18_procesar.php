<?php
function verificarClaves($c1, $c2) {
    if ($c1 != $c2)
        echo "Las claves no coinciden.";
    else
        echo "Claves correctas. Usuario registrado.";
}

verificarClaves($_POST['clave1'], $_POST['clave2']);
?>
<br><br><a href="punto18.php">Volver</a>
