<?php
$nombre = $_POST ['name'];
$email = $_POST ['email'];
$tel = $_POST ['tel'];
$asunto = $_POST ['motivo'];
$condiciones = $_POST ['privacidad'];
// $mensaje = $_POST ['mensaje'];

$para = 'godoypablom@gmail.com';
$asunto = 'Consulta web sobre '.$asunto; 

$headers = "Mime-version: 1.0 \r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "To: $para\r\n";
// $header .= "Cc: $email"; 

$mensaje = "<h1>Cuerpo del mail</h1>\r\n";
$mensaje .= "<p>Nombre y apellido : ".$nombre."</p>\r\n";
$mensaje .= "<p>Email: ".$email."</p>\r\n";
$mensaje .= "<p>Teléfono ".$tel."</p>\r\n";
$mensaje .= "<p>¿Acepta política de privacidad? ".$condiciones."</p>\r\n";

mail ($para, $asunto, $mensaje, $headers);

header ( "location: gracias.html" );
?>



