<?php
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$telefono = $_POST['telmovil'];
	$descripcion = $_POST['descripcion'];
	$para = "info@mimonolito.com";
	$asunto ="Un cliente te ha contactado desde el sitio web.";
	$header = "FROM: " . $mail;
	$mensaje = "Nombre del cliente:" . $nombre . "\n E-Mail: " . $mail . " \n Telefono: " . $telefono . "\n Mensaje:\n " . $descripcion . "\n";

	if (mail($para, $asunto, $mensaje, $header))
	{
		echo "<script language='javascript'>
		alert('Mensaje enviado, muchas gracias.');
		window.location.href = 'http://www.mimonolito.com';
		</script>";
	}
	else
	{
		echo "Falló el envio, intente de nuevo o llámenos";
	}

?>
