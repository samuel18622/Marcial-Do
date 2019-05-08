<?php
session_start();
if (isset($_SESSION["usuario"])) {
}else{
  header("location:login.php");
}
$texto = $_POST["texto"];
$ID = $_POST["ident"];
$img = $_FILES["imagen"];

$imag = $img["name"];


require "conexion.php";

$sql = "UPDATE `seccion` SET `Texto` = '$texto', `imagen` = 'img/$imag' WHERE `seccion`.`ID` = $ID;";

$result = mysqli_query($link, $sql);

move_uploaded_file($img["tmp_name"], "../img/".$img["name"]);
mysqli_close($link);


header("location:../administrador.php");
?>
