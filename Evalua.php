<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
if(isset($_REQUEST['Evalua'])){
	$Pregunta[1]=$_REQUEST['s1'];
	$Pregunta[2]=$_REQUEST['s2'];
	$Pregunta[3]=$_REQUEST['s3'];
	$Pregunta[4]=$_REQUEST['s4'];
	$Pregunta[5]=$_REQUEST['s5'];
	$id=$_REQUEST['id'];
	$conexion=mysql_connect("localhost:3307","root","usbw")or die(mysql_error()); 
	mysql_select_db('inscribirme',$conexion)or die(mysql_error());
	$sql="select * from cuestionario";
	$resultado=mysql_query($sql,$conexion)or die(mysql_error());
	$numero=mysql_num_rows($resultado);
	$contador=0;
	$s=0;
	$n=0;
	$contador2=0;
	if($numero>0)
		while($registro=mysql_fetch_array($resultado)){
			if($Pregunta[$contador]==$registro['s']){
				$s++;
			}else{
				$n++;
			}
			
			$contador++;
			$contador2++;
			
		}
		$s=(10/10)*$s;
		$sql="UPDATE `cuestionario` SET `Id_pregunta`=[value-1],`Pregunta`=[value-2],`s`=[value-3],`n`=[value-4] WHERE 1";
		mysql_close($conexion);
}
?>
<body>
<table width="119" border="1" align="center">
  <tr>
    <td height="141" valign="bottom">
    <table width="100%" border="0" bgcolor="#3366CC" height="<?php echo ((100/$contador)*$s); ?>%">
      <tr>
        <td><?php echo $s*10; ?>%f</td>
      </tr>
      
    </table></td>
    <td height="141" align="center" valign="bottom"><table width="100%" border="0" bgcolor="red" height="<?php echo ((100/$contador2)*$n); ?>%">
      <tr>
        <td><?php echo $n*10; ?>%f</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<?php 
	if($s>$n){
		echo 'si' ;
		}else{ 
		echo 'no';
		} 
		?></td>
  </tr>
</table>
</body>
</html>