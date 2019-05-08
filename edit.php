<?php 
session_start();
if (isset($_SESSION["usuario"])) {
}else{
  header("location:../login.php");
}
$idUser = $_GET["idGente"];

require "php/conexion.php";
$sql = "SELECT * FROM registro WHERE ID='$idUser'";
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
    <h2>Editar usuari@ <?php echo $row["Nombre"]; ?></h2>
    <hr>
    <form method="post" action="php/uddate.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de usuario</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" name="nombre" value="<?php echo $row["Nombre"]; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Correo electronico</label>
    <input type="email" class="form-control" id="exampleInputPassword1" value="<?php echo $row["Correo"]; ?>" required="required" name="correo">
  </div>
  <input class="btn BB btn-warning" type="submit" name="ingresar" value="Editar">
  <a class="btn BT" href="usuarios.php">Volver</a>
  <input type="hidden" name="ident" value="<?php echo $row["ID"];?>">
</form>

</body>
</html>