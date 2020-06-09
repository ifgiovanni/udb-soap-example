<?php

// Se carga el archivo de funciones
require 'service_functions.php';

// Debug : don't cache WSDL file whilst in development
ini_set("soap.wsdl_cache_enabled","0");

$options = ['uri' => 'http://localhost/simple.wsdl'];
//$server = new SoapServer(null, $options);
$server = new SoapServer("simple.wsdl");

/* 
/    Se registran las funciones que tendrá disponible
/    el ws para consultar
*/
$server->AddFunction("getSaludo");
$server->AddFunction("getDetalles");

$server->handle();

?>


