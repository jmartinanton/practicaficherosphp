<?php

$sql = $_POST[""];

$resultado = explode(' ', $sql );

if(feof($this->fitxer)) {
	return "false";
}

while(!feof($this->fitxer)) {
	$linies[] = fgets($this->fitxerObert, 1024);
}