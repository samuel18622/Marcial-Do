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
			<h1 class="click">Click</h1>
			<video src="video/video.mp4" autoplay muted ></video>
		</div>
		</section>
		<section class="inicio vIni N1">
			<a href="php/login.php" class="btn BB ini">Ingresar</a>
			<a href="contacto.php" class="btn BT C fijo">C</a>
			<a href="registro.php" class="btn BB R in">R</a>

			<div class="saludo"></div>
			<div class="perga"></div>

		<article class="informacion">
			<h3><?php echo $row["Texto"]; ?>			
			</h3>
			<br>
			<button class="boton ade"><b>Adelante</b></button>
		</article>
	</section>
	<section class="infor vIni">
			
		<article class="informacion i2"><div class="leecam"></div>
			<h3>Para comenzar ésta grandiosa aventura por el tiempo recuerda avanzar con la flecha en dirección hacia la derecha y para retroceder con la flecha en dirección izquierda			
			</h3>
			<div class="dire"></div>
			<button class="boton b6">Comenzar</button>
		</article>
	</section>

	<section id="contenedorMayor">
		
			<div class="LShanP">
			</div>
			<div class="LShan">
			</div>
			<div class="LShans"></div>
				<div class="objeto1 nube"><img src="img/nube1.png"></div>
				<div class="objeto2 nube"><img src="img/nube2.png"></div>
				<div class="objeto3 nube"><img src="img/nube3.png"></div>
				<div class="objeto4 nube"><img src="img/nube4.png"></div>
				<div class="objeto5 nube"><img src="img/nube5.png"></div>
				<div class="objeto6 nube"><img src="img/nube6.png"></div>
				<div class="objeto7 nube"><img src="img/nube7.png"></div>
				<div class="objeto8 nube"><img src="img/nube8.png"></div>
			
<!--Ventanas-->
    
    <article  class="texto1970" >
			<div class="contenido">
				<button class="btnSalir S3">X</button>
			<img class="i1970" src="<?php echo $row2['imagen']; ?>" width="100%">
			<p class="tex2" style="font-size: 15pt;">
			<?php echo $row2["Texto"]; ?>
            </p>
            </div>
            <button class="boton vmas">Ver más</button>
            <button class="boton an1970">Animación</button>
		</article>
		<section class="ventana2 ani1970">
			<button class="btnSalir salir">X</button>
			<div class="animacion"><video src="video/animacion2.mp4" controls muted width="100%"></video></div>
		</section>

<!--Ventanas-->

    <section class="SecHistorieta">
			<button class="btnSalir S1">X</button>
		<div class="flecha1 n1"><i class="far fa-arrow-alt-circle-up"></i></div>

		<section class="historieta">
			<div class="a1944">
			<div>
			<img src="img/pa_1944.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more m2"></button>
				<article class="sinop sin2">Un monje a una aldea de China y les enseña a los que estaban allí un sistema oficial de lucha y defensa para que tuvieran algunas técnicas para defenderse en el momento en que lo necesiten.<br> <button class="m2  BS">salir</button></article>
			<img src="img/his_1.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more m3"></button>
				<article class="sinop sin3">El monje se va. Tiempo después 2 jóvenes de la aldea deciden viajar porque se encuentran en guerra con otra comunidad, y deciden que en el camino van a transmitir el conocimiento que tiempo les dieron los monjes chinos. <br><button class="m3 BS">salir</button></article>
			<img src="img/his_2.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more m4"></button>
				<article class="sinop sin4">Los jóvenes en su camino se encuentran al comandante de las fuerzas de defensa y seguridad de Israel, y le enseñan el sistema oficial de lucha y defensa. <br><button class="m4 BS">salir</button></article>
			<img src="img/his_3.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more m5"></button>
				<article class="sinop sin5">Se hace de noche y el comandante les da las gracias a los jóvenes y se va para su cuartel y los jóvenes siguen su camino. <br><button class="m5 BS">salir</button></article>
			<img src="img/his_4.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more m6"></button>
				<article class="sinop sin6">El comandante llega al cuartel y les enseña a sus soldados el sistema.<br> <button class="m6 BS">salir</button></article>
			<img src="img/his_5.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more m7"></button>
				<article class="sinop sin7"> Los soldados practican lo enseñado y se dan de cuenta que este sistema les servirá demasiado en sus misiones. <br><button class="m7 BS">salir</button></article>
			<img src="img/his_6.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more m8"></button>
				<article class="sinop sin8">Jovenes practican el Wushu en China, siguiendo los movimientos de su gran maestro. <br><button class="m8 BS">salir</button></article>
			<img src="img/his_7.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more m9"></button>
				<article class="sinop sin9">Dos maestros hacen una presentación del Wushu formalmente como un deporte ante el gobierno. <br><button class="m9 BS">salir</button></article>
			<img src="img/his_8.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more m10"></button>
				<article class="sinop sin10">Dos jovenes participan en una competición organizada en tokio.<br> <button class="m10 BS">salir</button></article>
			<img src="img/his_9.jpg" width="100%" height="100%"></div>
			</div>
		</section>
			<div class="flecha2 n2"><i class="far fa-arrow-alt-circle-down"></i></div>
			</section>
<!--Ventanas-->
<section class="SecHistorieta2">
			<button class="btnSalir S2">X</button>
		<div class="flecha1 f1"><i class="far fa-arrow-alt-circle-up"></i></div>
		
		<section  class="historieta">
			<div class="a1950">
			<div>
			<img src="img/pa_1950.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more M2"></button>
				<article class="sinop Sin2">Jovenes practican el Wushu en China, siguiendo los movimientos de su gran maestro San Mura. <br><button class="M2 BS">salir</button></article>
			<img src="img/his1.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more M3"></button>
				<article class="sinop Sin3">San Mura lee una carta que le llega y se alegra por lo que dice en ella. <br> <button class="M3 BS">salir</button></article>
			<img src="img/his2.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more M4"></button>
				<article class="sinop Sin4">San Mura llega al festival y se pone alegre al ver el espectáculo tan grandioso que hay. <br><button class="M4 BS">salir</button></article>
			<img src="img/his3.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more M5"></button>
				<article class="sinop Sin5">San  Mura se monta en una tarima y empieza a realizar su debut del Wushu ante la multitud y el gobierno como un deporte más. <br><button class="M5 BS">salir</button></article>
			<img src="img/his4.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more M6"></button>
				<article class="sinop Sin6">Un representante del gobierno acepta al Wushu como un deporte más anotandolo en los datos de los deportes.<br><button class="M6 BS">salir</button></article>
			<img src="img/his5.jpg" width="100%" height="100%"></div>
			<div><button class="btn BM more M7"></button>
				<article class="sinop Sin7">Dos jóvenes participan en una competición organizada en Tokio días después  del festival.<br> <button class="M7 BS">salir</button></article>
			<img src="img/his6.jpg" width="100%" height="100%"></div>
			</div>
		</section>
		<div class="flecha2 f2"><i class="far fa-arrow-alt-circle-down"></i></div>
		</section>



<!--Ventanas-->

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
	<section class="ventana">
			<button class="btnSalir b2">X</button>
			<div class="animacion23aC">
				<video src="video/animacion.mp4" controls muted width="100%"></video>
			</div>
	</section>

<!--año 23aC-->
	<section class="contenedorFecha">
		<h1 class="nnnn">Año 23 a.C</h1>
		<div class="dojoJapones">
			<img src="img/dojo.png">
		</div>
		
		
	<div class="casita1"><img src="img/casita1.png"> </div>
	<div class="casita2"><img src="img/casita2.png"></div>
	</section>


    <!--año 1944-->

	<section class="contenedorFecha">
				
		<h1 class="nnnn">Año 1944</h1>
		<div class="btn BT H1">Historieta</div>
	
			<div class="temploisrael">
			<img class="templo" src="img/temploisrael.png" width="80%">
		</div>
		<div class="columna1"><img src="img/columna1.png"></div>
		<div class="columna2"><img src="img/columna2.png"></div>
	</section>
    <!--año 1950-->
	<section class="contenedorFecha">
		<h1 class="nnnn kataa">Año 1950</h1>

		<div class="btn BT H2 kataa">Historieta</div>
		
		
		
		<div class="casajaponesa">
			<img class="casa cas1 " src="img/casa1.png" width="80%">
			<img class="casa cas2" src="img/casa2.png" width="80%">
			<img class="casa cas3" src="img/casa3.png" width="80%">
		</div>
		<div class="cerca1"><img src="img/cerca1.png"></div>
	</section>
    <!--año 1970-->

	<section class="contenedorFecha">
		<h1 class="nnnn">Año 1970</h1>
		<div  class="banderas">
		<img class="bandera1" src="img/banderas.png" width="100%">
		<div  class="bandera"></div></div>
		<div class="temploJ">
			<img class="temploJ" src="img/templo.png" width="80%">
		</div>
		<div class="cerca2"><img src="img/cerca2.png" width="80%"></div>
	</section>

	<!--RA -->
	<section class="contenedorFecha">
		<h1 class="nnnn">Realidad Aumentada</h1>
		<section class="NR"><div class="templos"><img src="img/templos.png" width="100%"></div>
		<div class="plataforma"><img src="img/plataforma.png" width="100%"></div>
		<div class="imagenRA">
			<img src="img/cinturon.png" width="100%">
		</div>
		<div class="inforRA">
			<p>Para ver la magia de la realidad aumentada por favor sigue los siguientes pasos:<br>
			•Descarga el siguiente APK e instálalo en tu móvil.<br>
			•Hecho ésto escanea con la cámara de tu celular el cinturón blanco que aparece en la pantalla.<br>
			•Por último cuando aparezcan los cinturones, da click en cada uno y listo.<br>
				¡¡Aprende y déjate sorprender!!</p>
				<a class="BT btn" href="realidadCinturones2.apk" download>Descargar APK</a>
		</div>
	</section>
	</section>
	<!--Video juego-->
	<section class="contenedorFecha Juego">
		<h1 class="nnnn kataa">Katarsis</h1>
		<div class="muralla">
			<img class="muralla2 " src="img/muralla.png" width="80%">
		</div>
		<article class="inforjuego">
			<img class="kata" src="img/logokata.png">
			<p>Acompañanos a recolectar todos los animales y cinturones de las artes marciales en el juego Katarsis, ven y diviertete en esta gran aventura.</p>
	<div class="btn BB juegob"><a href="Katarsis/index.html" target="_blank"> Ir al juego</a></div>
		</article>		
	</section>
	</section>

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script defer src="js/jquery-3.3.1.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script defer src="js/jquery.easing.1.3.js"></script>
<script defer src="js/jquery.easing.compatibility.js"></script>
<script defer src="js/codigo.js"></script>
</body>
</html>