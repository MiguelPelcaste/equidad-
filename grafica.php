<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
body {
	background-image: url(descarga.jpg);
}
</style>
<meta charset="UFT-8">
    	<style type="text/css">
div#title{
	background-color: #06F;
	color: white;
	font-weight: bold;
	text-align: center;
	text-transform: uppercase;
	text-shadow: 1px 0px 15px #00FFFF;
	padding: 20Px;
	font-size: 20px;
}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resultados</title>
<link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>
 
<?php




	
$conexion=mysql_connect("localhost:3307","root","usbw")or die(mysql_error());
	mysql_select_db('inscribirme',$conexion)or die(mysql_error());
	$sql="select pre1 from grafica";
	$resultado=mysql_query($sql,$conexion);
	$rows= mysql_fetch_array($resultado);
	
	
$sql="select pre2 from grafica";
	$resultado2=mysql_query($sql,$conexion);
	$rows2= mysql_fetch_array($resultado2);
	

$sql="select pre3 from grafica";
	$resultado3=mysql_query($sql,$conexion);
	$rows3= mysql_fetch_array($resultado3);
	

$sql="select pre4 from grafica";
	$resultado4=mysql_query($sql,$conexion);
	$rows4= mysql_fetch_array($resultado4);
	

$sql="select pre5 from grafica";
	$resultado5=mysql_query($sql,$conexion);
	$rows5= mysql_fetch_array($resultado5);
	


	
	?>

<body>
<div id="glob_coneten">
	<div id="title">Resultados</div>
    	<div id="form_conten">                                            

<input name="pre1" type="text" id="pr1" value="¿Los derechos de los hombres y mujeres son los mismos ?" size="60px" maxlength="60px" />
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo"$rows[0]%"?>;">
  <?php echo"$rows[0]%"?>
    
  </div>
</div> 
<input name="pre2" type="text" id="pr2" value="¿Las mujeres tiene la misma posibilidad de conseguir un trabajo igual a un hombre ?" size="65px" maxlength="60px" /> 
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo"$rows2[0]%"?>;">
  <?php echo"$rows2[0]%"?>
    
  </div>
</div> 
<input name="pre3" type="text" id="pr3" value="¿Es importante la equidad de genero ? " size="40px" maxlength="60px" />
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo"$rows3[0]%"?>;">
  <?php echo"$rows3[0]%"?>
    
  </div>
</div> 

<input name="pre4" type="text" id="pr4" value="¿Usted cree que los hombres y las mujeres reciben
un trato diferenciado?" size="75px" />
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo"$rows4[0]%"?>;">
  <?php echo"$rows4[0]%"?>
    
  </div>
</div>

<input name="pre5" type="text" id="pr5" value="¿Usted cree que los hombre y los mujeres tienen las mismas oportunidades?" size="75px" />
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo"$rows5[0]%"?>;">
  <?php echo"$rows5[0]%"?>
    
  </div>
</div>
<form action="Comentarios.php" method="post" name="grafica">
 <input type="submit" name="Comentarios" id="Comentarios" value="Comentarios" formaction="Comentarios.php"/>
</form>
</body>

</html>
