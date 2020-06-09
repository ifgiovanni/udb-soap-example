<?php

/*
	Cliente
*/

try{

	$client = new SoapClient("http://localhost/simple.wsdl");
	$response = array();
	$response['saludo'] = $client->getSaludo();
	$response['detalles'] = $client->getDetalles();
	
	print "<pre>";
		print_r($response);
	print "</pre>";
	
} catch(SoapFault $e){
	
	echo($e);

}

?>


