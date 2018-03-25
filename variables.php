<?php
	#Declaracion de variables
	/* Tipos de Variables
	Int enteras guardan un valor del -Infinito al +Infinito*/
	$edad=25;
	#double decimales guardan un valor del -Infinito.infinito al +Infinito.infinito
	$calificacion=8.7677;
	#string cadena de texto , guarda un valor de mas de una letra
	$nombre="Juan Roberto";
	#char caracter , guarda un valor de un solo caracter ejemplo una letra
	$letra='&';
	#boolean cierto/falso , guarda un valor de 0 y 1 en donde 1= CIERTO y 0= FALSO
	$condicion= 5>6;

	echo "Tu edad es de ",$edad;
	echo "<br />";
	echo $calificacion;
	echo "<br />";
	echo $nombre;
	echo "<br />";
	echo $letra;
	echo "<br />";
	if($condicion==1){
		echo "CIERTO";
	}else{
		echo "MENTIRA";
	}
	echo "<br />";
?>