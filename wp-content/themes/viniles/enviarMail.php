  <?php
 $para = $_POST["nombre"];
 $remitente = $_POST["mail"];
 $cuerpoMensaje = $_POST["mensaje"]; 
 echo $para;
 echo $titulo = 'Mesaje enviado desde la pagina web'; 
 echo $mensaje = " <html> <head> <title>Hola Amigos de viniles y vinilos </title> </head> <body> <p>$cuerpoMensaje</p> </body> </html> ";
 $cabeceras = 'MIME-Version: 1.0' . "\r\n";$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $cabeceras .= "To: $para" . "\r\n";$cabeceras .= "From: $remitente" . "\r\n";
 echo mail($para, $titulo, $mensaje, $cabeceras);?>