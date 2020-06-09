<?php

/* Lista de funciones */

/* Esto debería ser una consulta a la base de datos, sin embargo
	para la demostración se realiza con texto fijo
*/

function getSaludo(){
	$string = "Hola profesor!";
	return $string;
	
}

function getDetalles(){
	$grupo = array(
		'1' => 'Jorge',
		'2' => 'Eduardo',
		'3' => 'Giovanni',
		'4' => 'Alonso',
		'5' => 'Óscar'
	);
	return $grupo;
}

?>