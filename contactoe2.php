<?php

$nom = $_POST["nombre"];
$com = $_POST["comentario"];

$correo = "adcm.103@gmail.com";
$asunto = "correo enviado desde el sitio web por: " . "$nom";
$mensaje = "Nombre: " . $nom . "<br>" . "Asunto: " . $com;
$mensaje =  "comentario: " . $com;

$tipomenaje = "Content-type:text/html;charset=UTF-8";


mail(/*a quien le vamos a enviar el correo*/$correo, /**/$asunto, /**/ $mensaje, $tipomenaje );

echo "se envio el mensaje: " . $mensaje;


?>