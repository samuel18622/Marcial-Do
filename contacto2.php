<?php
session_start();
if (isset($_SESSION["usuario"])) {
}else{
  header("location:login.php");
}
$idUser = $_GET["idGente"];
require "php/conexion.php";
$sql = "SELECT * FROM registro WHERE ID = '$idUser' ";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
mysqli_close($link);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/logoM.ico">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet"  href="css/estilosModelo.css">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<title>Contacto</title>
</head>
<body class="N">

	<div class="jumbotron login usu">
		<h2>Enviar mensaje a <?php echo $row["Nombre"]; ?></h2>
		<hr>
		<form method="post" action="contactoe2.php">
  <div class="form-group">
    <p>Mensaje</p>
    <textarea name="Mensaje" cols="60" rows="6"></textarea>
  </div>
  <input class="btn BB btn-warning" type="submit" name="ingresar" value="Enviar"><a href="usuarios.php" class="btn BT  float-right">volver</a>
 
</form>
	</div>
<script defer src="js/jquery-3.3.1.min.js"></script>
<script defer src="js/bootstrap.min.js"></script>
<script defer src="js/bootstrap.bundle.min.js"></script>
<script defer src="js/codigo.js"></script>
</body>
</html>