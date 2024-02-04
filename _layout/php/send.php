<?php 
$para      = 'jesusm.palomo@gmail.com';
$titulo    = $_POST['subject'];
$mensaje   = $_POST['message'];
$cabeceras = 'From: ' . $_POST['name'] . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

echo(mail($para, $titulo, $mensaje, $cabeceras));
?>