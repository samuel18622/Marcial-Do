<?php
session_start();
if (isset($_SESSION["usuario"])) {
}else{
  header("location:../login.php");
}

$idUser = $_GET["idGente"];
echo $idUser;

require "php/conexion.php";

$sql = "DELETE  FROM registro WHERE ID='$idUser'";

$result = mysqli_query($link, $sql);

header("location: usuarios.php");
mysqli_close($link);
?>