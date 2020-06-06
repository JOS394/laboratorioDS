<?php
//AUTOR José Wilfredo España
	if(isset($_POST["codigo"]) &&
	 ($_POST["nombre"]) 	   &&
	 ($_POST["precio"])){
		date_default_timezone_set("America/El_Salvador");
		require_once("nusoap/lib/nusoap.php");
		$wsdl="http://localhost/webservice/lab2DS_JoseEspana/ws2.php?wsdl";
		$client=new nusoap_client($wsdl,"wsdl");
		$client->soap_defencoding = 'UTF-8';
		$err=$client->getError();
		if($err){
			echo "<h1>error de conexion</h1>";
			exit(0);
		}
		$parametros=array("codigo"=>$_POST["codigo"],"nombre"=>$_POST["nombre"],"precio"=>$_POST["precio"]);
		$result=$client->call("productoeiva",$parametros);
		echo $client->getError();
		print_r($result);
	}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>producto e iva</title>
</head>
<body>
		
<table>
	<th colspan="2"><h3>Ingresar datos del producto</h3></th>
<form method="POST">
<tr>
	<td>Codigo de producto:</td>
	<td><input type="text" name="codigo"></td>
</tr>
	<tr>
	<td>Nombre de producto:
	<td><input type="text" name="nombre"></td>
</tr>
<tr>
	<td>precio:</td>
	<td><input type="text" name="precio"></td>
</tr>
<tr>
	<td colspan="2"><center><input type="submit" name="enviar"></center></td>
</tr>

	</form>
</table>
</body>
</html>
<?php
}
?>