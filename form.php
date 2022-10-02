<?php

$nombre = $_POST ['nombre'];
$mail = $_POST ['mail'];
$asunto = $_POST ['asunto'];
$mensaje = $_POST ['mensaje'];

$mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje .= "El asunto es:" . $asunto . ",\r\n";
$mensaje .= "Su e-mail es :" . $mail . ",\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . ",\r\n";
$mensaje .= "Enviado el" . date('d/m/Y', time());

$para = 'ezequielrico@outlook.com';
$asunto = 'Este mail fue enviado desde la web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:index.html');
?>