<?php

$archivo = $_POST[""];

if(feof($this->fitxer)) {
	echo "El fitxer <nom_fitxer> est� buit";
}

while(!feof($this->fitxer)) {
	$linies[] = fgets($this->fitxerObert, 1024);
}