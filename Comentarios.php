<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<style type="text/css">
body {
	background-image: url(descarga.jpg);
}
</style>

<?php
if(isset($_REQUEST['Comentarios'])){
	}
?>
<body>


<form id="form1" name="form1" method="post" action="">
  <p>Comenta que te parecio la encuesta</p>
  <p>
    <label for="comentario"></label>
    <textarea name="comentario" id="comentario"></textarea>
  </p>
</form>
<form action="equidad.php" method="post" name="grafica">
 <input type="submit" name="Fin" id="Fin" value="Fin" formaction="equidad.php"/>
</form>
</body>
</html>