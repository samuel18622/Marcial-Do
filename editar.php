<?php 
session_start();
if (isset($_SESSION["usuario"])) {
}else{
  header("location:../login.php");
}
$idUser = $_GET["idGente"];

require "php/conexion.php";
$sql = "SELECT * FROM seccion WHERE ID='$idUser'";
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
  <title>Editar</title>
</head>
<body class="N">
  <a href="logout.php" class="btn BT float-right">Salir</a>
 
  <div class="jumbotron login usu">
    <h2>Editar Sección <?php echo $row["Nombre"]; ?></h2>
    <hr>
    <form method="post" action="php/uddate2.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Nuevo Texto</label><br>
     <textarea name="texto" cols="70" rows="6"><?php echo $row["Texto"]; ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nueva Imagen</label><br>
    <input name="imagen" accept="image/*" type="file" value="<?php echo $row["Imagen"]; ?>">
  </div>
  <input class="btn BB btn-warning" type="submit" name="ingresar" value="Editar">
  <a class="btn BT" href="administrador.php">Volver</a>
  <input type="hidden" name="ident" value="<?php echo $row["ID"];?>">
</form>

</body>
</html>