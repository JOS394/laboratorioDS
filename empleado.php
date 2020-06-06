<?php //se estan comprobando y validadndo si existen algunos datos.
//AUTOR José Wilfredo España
	if(isset($_POST["usuario"]) &&
	 ($_POST["cargo"]) 			&&
	 ($_POST["sueldo"])			&&
	 ($_POST["years"])			&&
	 ($_POST["giro"])){
		date_default_timezone_set("America/El_Salvador");
		require_once("nusoap/lib/nusoap.php");
		$wsdl="http://localhost/webservice/lab2DS_JoseEspana/ws.php?wsdl";
		$client=new nusoap_client($wsdl,"wsdl");
		$client->soap_defencoding = 'UTF-8';
		$err=$client->getError();
		if($err){
			echo "<h1>error de conexion</h1>";
			exit(0);
		}//se declaran los variables arrays del post adentro de la variable parametros
		$parametros=array("usuario"=>$_POST["usuario"],"cargo"=>$_POST["cargo"],"sueldo"=>$_POST["sueldo"],"years"=>$_POST["years"],"giro"=>$_POST["giro"],"monto"=>$_POST["monto"]);
		$result=$client->call("hola",$parametros);
		echo $client->getError();
		print_r($result);
	}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>hola mundo web service</title>
</head>
<body>
		
<table>
	<th colspan="2"><h3>Ingresar datos del empleado</h3></th>
<form method="POST">
<tr>
	<td>Nombre de empleados:</td>
	<td><input type="text" name="usuario"></td>
</tr>
	<tr>
	<td>Cargo:
	<td><input type="text" name="cargo"></td>
</tr>
<tr>
	<td>Sueldo:</td>
	<td><input type="text" name="sueldo"></td>
</tr>
<tr>
	<td>Anios de trabajo :</td>
	<td><input type="number" name="years"></td>
</tr>
<tr>
	<td>Giro del negocio: </td>
	<td>
  <select name="giro">
  <option value="Comercio" selected>Comercio</option> 
  <option value="Industrial">Industial</option>
  <option value="Maquila">Maquila</option>
  </td>
</select>
<tr>
	<td><input type="hidden" value="0" name="monto"></td>
</tr>
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