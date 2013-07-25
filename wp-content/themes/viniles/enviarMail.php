<?php
	 $nombre = $_POST["nombre"];
	 $remitente = $_POST["remitente"];
	 $cuerpoMensaje = $_POST["mensaje"]; 
	 echo $mensaje = " <html> <head> <title>Hola Amigos de viniles y vinilos </title> </head> <body> <p>$cuerpoMensaje</p> </body> </html> ";
	 $cabeceras = 'MIME-Version: 1.0' . "\r\n";$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 $cabeceras .= "To: vinilosyviniles@gmail.com" . "\r\n";
	 $cabeceras .= "From: $remitente" . "\r\n";
	 mail($nombre, $titulo, $mensaje, $cabeceras);
?>
<?php echo 'Muchas gracías. Tu mensaje se ha enviado con exito y pronto nos comunicaremos contigo.'; ?>