<?php

class Fichero {
	
	private $fichero;
	private $ficheroAbierto;
	
	
	
	function _construct($nombre){
		$this->fichero = $nombre;
	}
	
	function abre(){
		
	}
	
	function cierra(){
		
	}
	
	function leeEntero(){
		if(!feof($this->fitxer)) {
			return file_get_contents($this->fitxer);
		}
		return "El fichero ".$this->fichero." esta vacio";
	}
	
	function leeLinea(){
		if(feof($this->fichero)) {
			return "El fichero ".$this->fichero." esta vacio";
		}
		
		while(!feof($this->fitxer)) {
			$linies[] = '1 - ' + fgets($this->fitxerObert, 1024);
		}
		return $linies;
	}
	
	function anadirAlFinal(){
		file_put_contents($this->fitxer, $nouContingut, FILE_APPEND);
	}
	
	function vaciar(){
		
	}
	
	function borrar(){
		
	}

}
