<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

</head>
<?php
	$Sexo=$_REQUEST['Sexo'];
	$hombre="hombre";
	if($Sexo == $hombre){
	echo ('<style type="text/css">
	body{background-color:#6CF;}
	
	</style> ' );
	}else{
	echo ('<style type="text/css">
	body{background-color:#F0F;}
	
	</style> ' );
}

?>

<?php
$conexion=mysql_connect("localhost:3307","root","usbw")or die(mysql_error());
mysql_select_db('inscribirme',$conexion)or die(mysql_error());
$sql="select * from cuestionario";
$resultado=mysql_query($sql,$conexion)or die(mysql_error());
$numero=mysql_num_rows($resultado);
mysql_close($conexion);
?>
<?php
$contador=1;
?>


<body>
<form id="form1" name="form1" method="post" action="Evalua.php">
  <table width="232" border="1">
    <tr>
      <td width="83">Id_pregunta</td>
      <td width="59">pregunta</td>
      <td width="29">si</td>
      <td width="33">no</td>
    </tr>
    <tr>
    </tr>
     <?php
  if($numero>0)
  while($registro=mysql_fetch_array($resultado)){
  ?>
    <tr>
      <td align="center"><?php echo $registro ['Id_pregunta'];?></td>
      <td align="center"><?php echo $registro ['Pregunta'];?></td>
      <td align="center"><input type="radio" name="s<?php echo $contador?>" id="s" value="s" /> <?php  $registro ['s'];?></td>
      <td align="center"><input type="radio" name="s<?php echo $contador?>" id="n" value="n" /> <?php  $registro ['n'];?></td>
         <?php
	$contador++;
  }
  ?>
  
  </table>
<input type="submit" name="Evalua" id="Evalua" value="Evalua" />
  
</form>
</body>
</html>
