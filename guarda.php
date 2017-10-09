
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>
<?php
if(isset($_REQUEST['Evalua'])){
    $pregunta1=$_REQUEST['s1'];
	$pregunta2=$_REQUEST['s2'];
	$pregunta3=$_REQUEST['s3'];
	$pregunta4=$_REQUEST['s4'];
	$pregunta5=$_REQUEST['s5'];
	
	$conexion=mysql_connect("localhost:3307","root","usbw")or die(mysql_error());
	mysql_select_db('inscribirme',$conexion)or die(mysql_error());
	
	if($pregunta1 == "Si"){
$sql="UPDATE `grafica` SET `pre1`= pre1 +1 WHERE id = 0";
	$resultado=mysql_query($sql,$conexion);
	}
	if($pregunta2 == "Si"){
$sql="UPDATE `grafica` SET `pre2`= pre2 +1 WHERE id = 0";
	$resultado=mysql_query($sql,$conexion);
	}
	if($pregunta3 == "Si"){
$sql="UPDATE `grafica` SET `pre3`= pre3 +1 WHERE id = 0";
	$resultado=mysql_query($sql,$conexion);
	}
	if($pregunta4 == "Si"){
$sql="UPDATE `grafica` SET `pre4`= pre4 +1 WHERE id = 0";
	$resultado=mysql_query($sql,$conexion);
	}
	if($pregunta5 == "Si"){
$sql="UPDATE `grafica` SET `pre5`= pre5 +1 WHERE id = 0";
	$resultado=mysql_query($sql,$conexion);
	}
	 
	header("location:grafica.php");
}

	?>
    
<body>


</body>
</html>