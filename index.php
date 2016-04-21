<html>
	<head>
	</head>
	<body>
	<?php 
	include "modelo/clases/directorio.php";
	
	$directorio = new Directorio(fitxers);
	$directorio->getContenido();
	
	?>
	</body>
</html>

