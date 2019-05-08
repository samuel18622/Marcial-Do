<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/logoM.ico">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet"  href="css/estilosModelo.css">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<title>Registro</title>
</head>
<body class="N">
	

	<div class="jumbotron login usu">
		<h2>Registro de usuarios</h2>
		<hr>
		<form method="post" action="php/crear2.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de usuario</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" name="nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Correo electronico</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="ejemplo@correo.com" required="required" name="correo">
  </div>
  <div class="mensaje">
  	<?php
  	if(isset($_GET["enviar"]) ){
  		echo "se enviaron los datos correctamente";
  	}
  	 ?>
  	
  </div>
  <input class="btn BB btn-warning" type="submit" name="ingresar" value="Enviar"><a href="MarcialDo.php" class="btn BT btn-warning float-right">volver</a>
 
</form>
	</div>
<script defer src="js/jquery-3.3.1.min.js"></script>
<script defer src="js/bootstrap.min.js"></script>
<script defer src="js/bootstrap.bundle.min.js"></script>
<script defer src="js/codigo.js"></script>
</body>
</html>