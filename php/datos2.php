<?php 
$nom = $_POST["usu"];
$contra = $_POST["pass"];

require "conexion.php";
$sql = "SELECT * FROM Login WHERE usuario_log = '$nom' AND contra_log = '$contra'";
$result = mysqli_query($link, $sql);

$count = mysqli_num_rows($result);
mysqli_close($link);
if($count == 1){
	session_start();
	$_SESSION["usuario"] = $nom;
	header ("Location: ../administrador.php");

}else{
	header ("Location: login.php?error=dato");
}
?>