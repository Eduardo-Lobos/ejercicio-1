<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8"/>
	<title>ejercicio 1 php</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="problema">
		<h1>Ejercicio practica 1</h1>
	<p>	1. Cree un script en php que imprima un mensaje usando variables las cuales
		formaran una dirección de residencia, la cual se deberá separar por calle,
		colonia, numero de casa, municipio y departamento, la salida impresa se debe
		de realizar con printf.
	</p>
	</div >
	<div class="solucion">
	<h3>Datos</h3>
	<?php
	$direccion='Zacatecoluca.';
	$calle='29 av norte.';
	$colonia='Barrio el Centro.';
	$casa='2036.';
	$muni='Zacatecoluca, La Paz.';

	printf("Direccion: %s<br><br> 
			Calle: %s <br><br> 
			Colonia: %s <br><br> 
			Numero de Casa: %s <br><br>
			Depto y Municipio: %s ", 
		$direccion, $calle, $colonia, $casa, $muni );



 
	?>
	</div>

	<footer class="alumno">
		<p>Nelson Eduardo Rodriguez Lobos SIS 21B </p>
	</footer>
</body>
</html>