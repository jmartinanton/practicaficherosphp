<?php

require_once './modelo/bases/fichero.php';

$nombre = $_POST["nombre"];

$fichero = new Fichero($nombre);

$fichero.leeLinea();
?>

<html>
<form action="index.php">
<input type="submit" value="Volver a la pantalla principal"/>
</form>
</html>