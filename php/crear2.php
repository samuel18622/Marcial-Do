<?php
$nom = $_POST["nombre"];
$correo = $_POST["correo"];

require "conexion.php";

$sql = "INSERT INTO `registro` (`ID`, `Nombre`, `Correo`) VALUES (NULL, '$nom', '$correo')";

$result = mysqli_query($link, $sql);
mysqli_close($link);
 header("location:../registro.php?enviar=datos");
?>