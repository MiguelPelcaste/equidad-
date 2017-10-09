<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UFT-8">
    	<style type="text/css">
		body{font-family:verdana;font-size:16px}
		input[type=text], input[type=email]{display:flex;border:1px; solid silver;border-radius:4px; padding:8px; -webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
			box-sizing:border-box; width:100%} input{margin:10px 0;}
			div#glob_coneten{
	background-color: #F0F;
	border-radius: 4px;
border:3px dashed #06F max-width:400px; 			margin: 0 auto;
}
			div#form_conten{padding:20px;}
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
	input[type=submit]{padding:5px 10px 5px 10px; background-color:#06F; border-radius:4px; border:1px solid #03F; color:white;
	font-weight:bold; font-size:15px;}
			
	    </style>
	<title>Ingresa</title>
	
</head>
</head>
<?php
if(isset($_REQUEST['Registrar'])){
	$Nombre=$_REQUEST['Nombre'];
	$Direccion=$_REQUEST['Direccion'];
	$Correo=$_REQUEST['Correo'];
	$Sexo=$_REQUEST['Sexo'];
	$conexion=mysql_connect("localhost:3307","root","usbw")or die(mysql_error());
	mysql_select_db('inscribirme',$conexion)or die(mysql_error());
	$sql="insert into inscrito(Nombre,Direccion,Correo,Sexo) values('$Nombre','$Direccion','$Correo','$Sexo')";
	$resultado=mysql_query($sql,$conexion)or die(mysql_error());
	mysql_close($conexion);
	if($resultado==true){
		echo ('<p align="center"><h2>Se ejecuto correctamente la consulta</h2></p>');
	}

}
?>
<body>
<div id="glob_coneten">
	<div id="title">Ingresa</div>
    	<div id="form_conten">



	<form action="equidad.php" method="post" name="Ingresa">
		<input type="text" id="Nombre" name="Nombre" placeholder="Nombre">
		<input type="text" id="Direccion" name="Direccion" placeholder="Direccion">
		<input type="email" id="Correo" name="Correo" placeholder="Correo electro&oacute;nico">
		<label for="Sexo">sexo</label>
<select name="Sexo" id="Sexo">
  <option value="mujer">mujer</option>
  <option value="hombre">hombre</option>
</select>
<input type="submit" name="Registrar" id="Registrar" value="Registrar" />
<input type="submit" name="Encuesta" id="Encuesta" value="Encuesta" formaction="Mujer.php" />			
	
		
	</form>
</section>
<p>&nbsp;</p>

</body>
</html>