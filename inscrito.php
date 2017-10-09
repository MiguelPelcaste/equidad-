<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
if(isset($_REQUEST['Comenzar'])){
	$Nombre=$_REQUEST['Nombre'];
	$Direccion=$_REQUEST['Direccion'];
	$Correo=$_REQUEST['Correo'];
	$Sexo=$_REQUEST['Sexo'];
	$conexion=mysql_connect("localhost:3307","root","usbw")or die(mysql_error());
	mysql_select_db('inscribirme',$conexion)or die(mysql_error());
	$sql="insert inlto inscrito(Nombre,Direccion,Correo,Sexo) values('$Nombre','$Direccion','$Correo','$Sexo')";
	$resultado=mysql_query($sql,$conexion)or die(mysql_error());
	mysql_close($conexion);
	if($resultado==true){
		echo ('<p align="center"><h2>Se ejecuto correctamente la consulta</h2></p>');
	}
	
	header("location:Mujer.php");
}
?>


<body>
</body>
</html>