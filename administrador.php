<?php
session_start();
if (isset($_SESSION["usuario"])) {
}else{
  header("location:login.php");
}
require "php/conexion.php";
$sql = "SELECT * FROM seccion";
$result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
 <html>
  <head>
	<meta charset="utf-8">
	<link rel="icon" href="img/logoM.ico">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet"  href="css/estilosModelo.css">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<title>Administrador</title>
</head>

<body class="N">
	<a href="logout.php" class="btn BT float-right">Salir</a>
	<a href="usuarios.php" class="btn BB ">Usuarios registrados</a>
	<div class="secc"><button class="fle"></button>
		
		<div class="sec">
		<button class="B1 ar"></button>
		<article class="editar">
		<div class="edit">
	
   <div class='editables e1'><h1>Editar Secciones</h1></div>
  
  <?php echo "<a";
   echo " href='editar.php?idGente=1'>";
  echo "<div class='editables e2'><img src='img/p_inicio.jpg' width='100%''></div>";
  echo "</a>";?>
  <?php echo "<a";
   echo " href='editar.php?idGente=2'>";
  echo "<div class='editables e3'><img src='img/23aC.jpg' width='100%''></div>";
  echo "</a>";?>
  <?php echo "<a";
   echo " href='editar.php?idGente=3'>";
  echo "<div class='editables e4'><img src='img/p_1970.jpg' width='100%''></div>";
  echo "</a>";?>
			</div>
		</article>

		<button class="B1 ab"></button>			
		</div>

	</div>
	

	<div class="Ad">
		<h2>Bienvenido SR Administrador</h2>
		<hr>
		<div>
		<img src="img/logoproyecto.png" width="100%">
		</div>
	</div>

<script defer src="js/jquery-3.3.1.min.js"></script>
<script defer src="js/bootstrap.min.js"></script>
<script defer src="js/bootstrap.bundle.min.js"></script>
<script defer src="js/codigo.js"></script>
</body>
</html>