<?php

class Directorio {

	private $directorio;
	private $directorioAbierto;
	
	function _construct($rutaDirectorio){
		$this->directorio = $rutaDirectorio;
	}
	
	function abrir(){
		$this->directorioAbierto = opendir($this->directorio);
	}
	
	function cerrar(){
		closedir($this->directorioAbierto);
	}
	
	function getContenido(){
		while ($contenido = readdir($this->directorioAbierto)){
			if (is_dir($contenido)){
				echo "<lh>" . $contenido . "</lh>";
			} else echo "<li>" . $contenido . "</lh>";
		}
		
	}
	
	
	
}