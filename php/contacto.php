<?php
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$telefono = $_POST['telmovil'];
	$descripcion = $_POST['descripcion'];
	$para = "info@mimonolito.com";
	$asunto ="MONOLITO: Un cliente te ha contactado desde el sitio web.";
	$headers = "FROM: " . $mail;
	$mensaje = "Nombre del cliente: " . $nombre . "\n\n E-Mail: " . $mail . " \n\n Telefono: " . $telefono . "\n\n Mensaje:\n " . $descripcion . "\n\n";

	if (mail($para, $asunto, $mensaje, $headers))
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
