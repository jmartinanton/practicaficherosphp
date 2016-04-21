<?php

class Fichero {
	
	private $fichero;
	private $ficheroAbierto;
	
	
	
	function _construct(){
		
	}
	
	function abre(){
		
	}
	
	function cierra(){
		
	}
	
	function leeEntero(){
		
	}
	
	function leeLinea(){
		if(feof($this->fitxer)) {
			return "false";
		}
		
		while(!feof($this->fitxer)) {
			$linies[] = '1 - ' + fgets($this->fitxerObert, 1024);
		}
		return $linies;
	}
	
	function anadirAlFinal(){
		
	}
	
	
	
	
	
	
	
	
	
	
	
}