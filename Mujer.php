<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

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
<body>

<form id="form1" name="form1" method="post" action="guarda.php">
  <p>
    <label for="pre1"></label>
    <input name="pre1" type="text" id="pr1" value="¿Los derechos de los hombres y mujeres son los mismos ?" size="60px" maxlength="60px" />
    si
    <input type="radio" name="s1" id="si1" value="Si" />
    <label for="si"></label>
  no
  <input type="radio" name="s1" id="no1" value="No" />
  <label for="no"></label>
  </p>
  <p>
    <label for="pre2"></label>
    <input name="pre2" type="text" id="pr2" value="¿Las mujeres tiene la misma posibilidad de conseguir un trabajo igual a un hombre ?" size="65px" maxlength="60px" /> 
    si
<input type="radio" name="s2" id="si2" value="Si" />
    <label for="si2"></label>
no
<input type="radio" name="s2" id="no2" value="No" />
<label for="no2"></label>
</p>
  <p>
    <label for="pre3"></label>
    <input name="pre3" type="text" id="pr3" value="¿Es importante la equidad de genero ? " size="40px" maxlength="60px" />
    si
<input type="radio" name="s3" id="si3" value="Si" />
    <label for="si3"></label>
no
<input type="radio" name="s3" id="no3" value="No" />
</p>
  <p>
    <label for="pre4"></label>
    <input name="pre4" type="text" id="pr4" value="¿Usted cree que los hombres y las mujeres reciben
un trato diferenciado?" size="75px" />
    si
<input type="radio" name="s4" id="si4" value="Si" />
    <label for="si4"></label>
no
<input type="radio" name="s4" id="no4" value="No" />
  </p>
  <p>
    <label for="pre5"></label>
    <input name="pre5" type="text" id="pr5" value="¿Usted cree que los hombre y los mujeres tienen las mismas oportunidades?" size="75px" />  
    si
    <input type="radio" name="s5" id="s5i" value="Si" />
    <label for="si5"></label>
no
<input type="radio" name="s5" id="no5" value="No" />
  </p>
  
  <input type="submit" name="Evalua" id="Evalua" value="Evalua"/>
</form>
</body>
</html>