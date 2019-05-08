<?php
session_start();
if (isset($_SESSION["usuario"])) {
}else{
  header("location:login.php");
}
require "php/conexion.php";
$sql = "SELECT * FROM registro ";
$result = mysqli_query($link, $sql);


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
	<title>Usuarios</title>
</head>
<body class="N">
   <a href="logout.php" class="btn BT float-right">Salir</a>
	<table class="table table-striped">
  <thead>
    <tr class="cabezalista">
     
      <th scope="col">Nombre</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Enviar correo</th>
    </tr>
  </thead>
  <tbody>
  	
     <?php 
     while($row = mysqli_fetch_array($result)){
  echo "<tr>"; 

  echo "<td>";
  echo $row ["Nombre"];
  echo "</td>"; 

  echo "<td>";
  echo "<a class='morado' ";
   echo " href='edit.php?idGente=".$row["ID"]."'>";
  echo "Editar";
  echo "</a>";
  echo "</td>";

  echo "<td>";
  echo "<a class='red' ";
   echo " href='eliminar.php?idGente=".$row["ID"]."'>";
  echo "Eliminar";
  echo "</a>";
  echo "</td>";
   echo "<td>";
   echo "<a class='blanco' ";
   echo " href='contacto2.php?idGente=".$row["ID"]."'>";
  echo $row["Correo"];
  echo "</a>";
  echo "</td>";

  echo "</tr>";
}
?>
  </tbody>
</table>
<a class="btn BB btn-warning" href="administrador.php">Volver</a> 

<script defer src="js/jquery-3.3.1.min.js"></script>
<script defer src="js/bootstrap.min.js"></script>
<script defer src="js/bootstrap.bundle.min.js"></script>
<script defer src="js/codigo.js"></script>
</body>
</html>