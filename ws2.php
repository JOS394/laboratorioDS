<?php
date_default_timezone_set("America/El_Salvador");
require_once ("nusoap/lib/nusoap.php");
$server= new nusoap_server;
$server->configureWSDL('server','urn:server');//->wsdl
$server->wsdl->schemaTargetNamespace='urn:server'; 
//AUTOR José Wilfredo España
//declarando las variables adentro de arrays
$server->register('productoeiva',
		array('codigo'=>'xsd:string',
			  'nombre'=>'xsd:string',
			  'precio'=>'xsd:float'),
//declarando el array
		array('return'=>'xsd:string'),
		'urn:server',
		'urn:server#productoeivaServer',
		'rpc',
		'encoded',
		'funcion mas iva');

// funcion en la cual se hace el procedimiento y el retorno de datos ocupando tablas 
function productoeiva($codigo,$nombre,$precio){
	$IVA=$precio*0.13;
	$Total=$precio*1.13;

	//declaro una variable y le formo la estructura para luego solo retornar variable datos.
	$datos="<h3>Informacion del producto:<table></h3><br><br>".
	"<tr><td><h4>Codigo del producto: </h4></td><td style='color:green';><h4>$codigo<h4></td></tr>".
		   "<tr><td><h4>Nombre del producto: </h4></td><td style='color:green';><h4>$nombre</h4></td></tr>".
		   "<tr><td><h4>Precio del producto:</h4></td><td style='color:green';><h4>$precio</h4></td></tr>".
		   "<tr><td><h4>IVA(13%):</h4></td><td style='color:red';><h4>$IVA</h4></td></tr>".
		   "<tr><td><h4>Total a pagar:</h4></td><td style='color:green';><h4>$Total</h4></td></tr>"."<table/>";
	return $datos;

		
//Fin funcion
	}


$HTTP_RAW_POST_DATA=isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : "";

$server->service(file_get_contents("php://input"));
?>