<?php
date_default_timezone_set("America/El_Salvador");
require_once ("nusoap/lib/nusoap.php");
$server= new nusoap_server;
$server->configureWSDL('server','urn:server');//->wsdl
$server->wsdl->schemaTargetNamespace='urn:server'; //para identificar cada nombre de webservice si se tienen muchos  ->wsdl

$server->register('hola',
		array('usuario'=>'xsd:string',
			  'cargo'=>'xsd:string',
			  'sueldo'=>'xsd:float',
			  'years'=>'xsd:int',
			  'giro'=>'xsd:string',
			  'monto'=>'xsd:float'),

		array('return'=>'xsd:string'),
		'urn:server',
		'urn:server#holaServer',
		'rpc',
		'encoded',
		'funcion hola mundo');
function hola($usuario,$cargo,$sueldo,$years,$giro,$monto){


	if ($giro=="Comercio" && $sueldo>=300 && $sueldo<600) {
	$monto=(($sueldo/30)*15)*$years;
	
	/*

*/
	$datos="<h3>Informacion del empleado:<table></h3><br><br>".
	"<tr><td><h4>Nombre del empleado: </h4></td><td><h4>$usuario<h4></td></tr>".
		   "<tr><td><h4>Cargo: </h4></td><td><h4>$cargo</h4></td></tr>".
		   "<tr><td><h4>Sueldo:</h4></td><td><h4>$sueldo</h4></td></tr>".
		   "<tr><td><h4>años:</h4></td><td><h4>$years</h4></td></tr>".
		   "<tr><td><h4>Giro del negocio:</h4></td><td><h4>$giro</h4></td></tr>".
		   "<tr><td><h4> El pago por retiro voluntario :</h4></td><td style='color:red';><h4>$monto</h4></td></tr>"."<table/>";
	return $datos;
	}elseif($giro=="Comercio" && $sueldo>600){
	$monto=((600/30)*15)*$years;	
	$datos="<h3>Informacion del empleado:<table></h3><br><br>".
	"<tr><td><h4>Nombre del empleado: </h4></td><td><h4>$usuario<h4></td></tr>".
		   "<tr><td><h4>Cargo: </h4></td><td><h4>$cargo</h4></td></tr>".
		   "<tr><td><h4>Sueldo:</h4></td><td><h4>$sueldo</h4></td></tr>".
		   "<tr><td><h4>años:</h4></td><td><h4>$years</h4></td></tr>".
		   "<tr><td><h4>Giro del negocio:</h4></td><td><h4>$giro</h4></td></tr>".
		   "<tr><td><h4> El pago por retiro voluntario :</h4></td><td style='color:red';><h4>$monto</h4></td></tr>"."<table/>";

	return $datos;
	}elseif($giro=="Industria" && $sueldo>=300 && $sueldo<600){
	$monto=(($sueldo/30)*15)*$years;	
	$datos="<h3>Informacion del empleado:<table></h3><br><br>".
	"<tr><td><h4>Nombre del empleado: </h4></td><td><h4>$usuario<h4></td></tr>".
		   "<tr><td><h4>Cargo: </h4></td><td><h4>$cargo</h4></td></tr>".
		   "<tr><td><h4>Sueldo:</h4></td><td><h4>$sueldo</h4></td></tr>".
		   "<tr><td><h4>años:</h4></td><td><h4>$years</h4></td></tr>".
		   "<tr><td><h4>Giro del negocio:</h4></td><td><h4>$giro</h4></td></tr>".
		   "<tr><td><h4> El pago por retiro voluntario :</h4></td><td style='color:red';><h4>$monto</h4></td></tr>"."<table/>";

	return $datos;
	}elseif($giro=="Industria" && $sueldo>600){
	$monto=((600/30)*15)*$years;	
	$datos="<h3>Informacion del empleado:<table></h3><br><br>".
	"<tr><td><h4>Nombre del empleado: </h4></td><td><h4>$usuario<h4></td></tr>".
		   "<tr><td><h4>Cargo: </h4></td><td><h4>$cargo</h4></td></tr>".
		   "<tr><td><h4>Sueldo:</h4></td><td><h4>$sueldo</h4></td></tr>".
		   "<tr><td><h4>años:</h4></td><td><h4>$years</h4></td></tr>".
		   "<tr><td><h4>Giro del negocio:</h4></td><td><h4>$giro</h4></td></tr>".
		   "<tr><td><h4> El pago por retiro voluntario :</h4></td><td style='color:red';><h4>$monto</h4></td></tr>"."<table/>";

	return $datos;
	}elseif($giro=="Maquila" && $sueldo>=295 && $sueldo<=590){
	$monto=(($sueldo/30)*15)*$years;	
	$datos="<h3>Informacion del empleado:<table></h3><br><br>".
	"<tr><td><h4>Nombre del empleado: </h4></td><td><h4>$usuario<h4></td></tr>".
		   "<tr><td><h4>Cargo: </h4></td><td><h4>$cargo</h4></td></tr>".
		   "<tr><td><h4>Sueldo:</h4></td><td><h4>$sueldo</h4></td></tr>".
		   "<tr><td><h4>años:</h4></td><td><h4>$years</h4></td></tr>".
		   "<tr><td><h4>Giro del negocio:</h4></td><td><h4>$giro</h4></td></tr>".
		   "<tr><td><h4> El pago por retiro voluntario :</h4></td><td style='color:red';><h4>$monto</h4></td></tr>"."<table/>";

	return $datos;
	}elseif($giro=="Maquila" && $sueldo>590){
	$monto=((550/30)*15)*$years;	
	$datos="<h3>Informacion del empleado:<table></h3><br><br>".
	"<tr><td><h4>Nombre del empleado: </h4></td><td><h4>$usuario<h4></td></tr>".
		   "<tr><td><h4>Cargo: </h4></td><td><h4>$cargo</h4></td></tr>".
		   "<tr><td><h4>Sueldo:</h4></td><td><h4>$sueldo</h4></td></tr>".
		   "<tr><td><h4>años:</h4></td><td><h4>$years</h4></td></tr>".
		   "<tr><td><h4>Giro del negocio:</h4></td><td><h4>$giro</h4></td></tr>".
		   "<tr><td><h4> El pago por retiro voluntario :</h4></td><td style='color:red';><h4>$monto</h4></td></tr>"."<table/>";

	return $datos;
  }else{
		if ($sueldo<300) {
			return "El salario minimo del sector comercio es de $295";
		}else{
			$monto=((600/30)*15)*$years;	
	$datos="<h3>Informacion del empleado:<table></h3><br><br>".
	"<tr><td><h4>Nombre del empleado: </h4></td><td><h4>$usuario<h4></td></tr>".
		   "<tr><td><h4>Cargo: </h4></td><td><h4>$cargo</h4></td></tr>".
		   "<tr><td><h4>Sueldo:</h4></td><td><h4>$sueldo</h4></td></tr>".
		   "<tr><td><h4>años:</h4></td><td><h4>$years</h4></td></tr>".
		   "<tr><td><h4>Giro del negocio:</h4></td><td><h4>$giro</h4></td></tr>".
		   "<tr><td><h4> El pago por retiro voluntario :</h4></td><td style='color:red';><h4>$monto</h4></td></tr>"."<table/>";

	return $datos;
		}
		
	}
//Fin funcion
	}


$HTTP_RAW_POST_DATA=isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : "";
//$server->service($HTTP_RAW_POST_DATA);
$server->service(file_get_contents("php://input"));
?>