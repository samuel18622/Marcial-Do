<?php

require "php/conexion.php";
$sql = "SELECT * FROM seccion";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
$row1 = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($result);
mysqli_close($link);
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/logoM.ico">
	<title>Marcial-Do</title>
	<style type="text/css"></style>
	<link rel="stylesheet" type="text/css" href="css/estilosModelo.css">
	<link rel="stylesheet"  href="css/bootstrap.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>

		<section class="M-Do">
		<div class="logo">
			<video src="video/video.mp4" autoplay muted ></video>
		</div>
		</section>
		<section class="inicio N1">
			<a href="php/login.php" class="btn BB float-right">ingresar</a>
			<a href="contacto.php" class="btn BT float-right">C</a>
			<a href="registro.php" class="btn BB float-right">R</a>
		<article class="informacion">
			<h3><?php echo $row["Texto"]; ?>			
			</h3>
			<br>
			<button class="boton ade"><b>Adelante</b></button>
		</article>
	</section>

	<section id="contenedorMayor">
		<a href="php/login.php" class="btn BB btn-warning fijo">ingresar</a>
		<a href="contacto.php" class="btn BT fijo C">C</a>
			<a href="registro.php" class="btn BB fijo R">R</a>
			<div class="LShanP">
			</div>
			<div class="LShan">
			</div>
			<div class="LShans">
			</div>
    <!--año 23aC-->
	
	<section class="contenedorFecha N2">
		<div class="dojoJapones">
			<img class="casita" src="<?php echo $row['imagen']; ?>" width="80%">
		</div>
		<section class="ventana">
			<button class="btnSalir b2">X</button>
			<div class="animacion23aC">
				<video src="video/animacion.mp4" controls muted width="100%"></video>
			</div>
	</section>
		<section class="ventanatexto">
			<div class="texto23ac p_23aC">
				<img src="<?php echo $row1['imagen']; ?>" width="100%">
				<div></div>
				<button class="boton cont">ver más</button>
			</div>
			<button class="btnSalir">X</button>
			<article class="texto23ac inf">
				<p class="tex" style="font-size:  10pt;">
					<?php
				  echo $row1["Texto"];  ?>
                </p>
                <button class="boton ani23aC">Animación</button>
                </article>
			
	</section>
	</section>

    <!--año 1944-->

	<section class="contenedorFecha N3">
		<div class="flecha1 n1"><i class="far fa-arrow-alt-circle-up"></i></div>
		<section class="historieta">
			<div class="a1944">
			<img src="img/pa_1944.jpg" width="100%" height="100%">
			<img src="img/his_1.jpg" width="100%" height="100%">
			<img src="img/his_2.jpg" width="100%" height="100%">
			<img src="img/his_3.jpg" width="100%" height="100%">
			<img src="img/his_4.jpg" width="100%" height="100%">
			<img src="img/his_5.jpg" width="100%" height="100%">
			<img src="img/his_6.jpg" width="100%" height="100%">
			<img src="img/his_7.jpg" width="100%" height="100%">
			<img src="img/his_8.jpg" width="100%" height="100%">
			<img src="img/his_9.jpg" width="100%" height="100%">
			</div>

		</section>
			<div class="flecha2 n2"><i class="far fa-arrow-alt-circle-down"></i></div>
	</section>
    <!--año 1950-->

	<section class="contenedorFecha N4">
		<div class="flecha1 f1"><i class="far fa-arrow-alt-circle-up"></i></div>
		<section class="historieta">
			<div class="a1950">
			<img src="img/pa_1950.jpg" width="100%" height="100%">
			<img src="img/his1.jpg" width="100%" height="100%">
			<img src="img/his2.jpg" width="100%" height="100%">
			<img src="img/his3.jpg" width="100%" height="100%">
			<img src="img/his4.jpg" width="100%" height="100%">
			<img src="img/his5.jpg" width="100%" height="100%">
			<img src="img/his6.jpg" width="100%" height="100%">
			</div>
		</section>
		<div class="flecha2 f2"><i class="far fa-arrow-alt-circle-down"></i></div>
	</section>
    <!--año 1970-->

	<section class="contenedorFecha N5">
		<div class="banderas"><img class="bandera1" src="img/banderas.png" width="100%">
		<img class="bandera" src="img/bandera.png" width="100%"></div>
		
		<article class="texto1970" >
			<div class="contenido">
			<img class="i1970" src="<?php echo $row2['imagen']; ?>" width="100%">
			<p class="tex2" style="font-size: 15pt;">
			<?php
					
					echo $row2["Texto"];
					
						?>
            </p>
            </div>
            <button class="boton vmas">Ver más</button>
            <button class="boton an1970">Animación</button>
		</article>
		<section class="ventana2 ani1970">
			<button class="btnSalir salir">X</button>
			<div class="animacion"><video src="video/animacion2.mp4" controls muted width="100%"></video></div>
		</section>
	</section>

	<!--año 2003-->
	<section class="contenedorFecha NN">
		<button class="boton RA">Realidad aumentada</button>
		<section class="NR">
		<article class="informacionRA">
			<p class="textoRA">En esta parte se podrá ver una realidad aumentada utilizando tu dispositivo móvil.</p>
		</article>
		<div class="planeta"><img src="img/tierra.png" width="50%"></div>
	</section>
	</section>
	<!--Video juego-->
	<section class="contenedorFecha Juego">
		
	</section>
	</section>

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script defer src="js/jquery-3.3.1.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script defer src="js/codigo.js"></script>
</body>
</html>