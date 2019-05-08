<?php
session_start();
if (isset($_SESSION["usuario"])) {
}else{
  header("location:login.php");
}
$nom = $_POST["nombre"];
$ID = $_POST["ident"];
$Correo = $_POST["correo"];
require "conexion.php";
$sql = "UPDATE `registro` SET `ID` = '$ID', `Nombre` = '$nom', `Correo` = '$Correo' WHERE `registro`.`ID` = $ID";
$result = mysqli_query($link, $sql);
mysqli_close($link);
header("location:../usuarios.php");
?>
