<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/logoM.ico">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet"  href="../css/estilosModelo.css">
	<link rel="stylesheet"  href="../css/bootstrap.min.css">
	<title>Login</title>
</head>
<body class="finicio">
	<div class="jumbotron login lo">
		<h2>Login</h2>
		<hr>
		<form method="post" action="datos2.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escriba su nombre de usuario" name="usu" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Escriba su contraseña" name="pass" required="required">
  </div>
  <div class="mensaje">
  	<?php
  	if(isset($_GET["error"]) ){
  		echo "los datos no son correctos";
  	}
  	 ?>
  	
  </div>
  <input class="btn BB " type="submit" name="ingresar" value="Ingresar">
 <a href="../MarcialDo.php" class="btn BT float-right">Volver</a>
</form>
	</div>




<script defer src="js/jquery-3.3.1.min.js"></script>
<script defer src="js/bootstrap.min.js"></script>
<script defer src="js/bootstrap.bundle.min.js"></script>
<script defer src="js/codigo.js"></script>
</body>
</html>