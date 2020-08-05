<?php

$nombre =  $_POST["nombre"]; 

$remitente =  $nombre . " " . $_POST["remitente"]; 

$destinatario = $_POST["destinatario"]; 

$asunto =  $_POST["asunto"];

$mensaje =  $_POST["mensaje"];

$headers = "From:" . $remitente; 

$mail = mail($destinatario,$asunto,$mensaje,$headers,$remitente); // Este mail () hará nuestro trabajo de spoofing

header("Location: enviado.html") 

?>