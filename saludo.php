<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Mi primera pagina</title>
		<link rel="stylesheet" href="estilos.css" type="text/css">
	</head>
	<body>
		<div class="php">
			<h1>Pagina de PHP</h1>
			<?php
				require("variables.php");
				echo "Hola Mundo";


				//Esto es un comentario de una sola linea
				#Esto es otro comentario de una sola linea
				/*
				Esto es un comentario multilinea. Donde se puede escribir
				muchas lineas y no las tomara como codigo.
				*/
			?>
			<br /><a href="index.html">Regresarl al Index</a>
		</div>
	</body>
</html>