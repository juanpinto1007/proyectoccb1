<?php
require "../../.././personal/correo/util/phpmailer/phpmailer/src/PHPMailer.php";
require "../../.././personal/correo/util/phpmailer/phpmailer/src/SMTP.php";
require "../../.././personal/correo/util/phpmailer/phpmailer/src/Exception.php";

class Restablecer{

public function enviarRestablecerCorreo($correo,$identidad_id,$nomapel,$fecha){
	
	$mensaje="";
	$mail = new PHPMailer\PHPMailer\PHPMailer();

	$mail->IsSMTP();                                      // Configurar email para utilizar SMTP
	$mail->Host = "smtp.gmail.com";  // Especificar servidor principal y de copia.
	$mail->CharSet = 'UTF-8';
	$mail->SMTPAuth = true;     // Activar la autenticación SMTP
	$mail->Username = "juanpintodemomail@gmail.com";  // SMTP usuario
	$mail->Password = "juanpinto"; // SMTP contraseña
	$mail->Port = 587; // or 587
	$mail->From = "juanpintodemomail@gmail.com";
	$mail->FromName = "Institucion Educativa Bertha Suttner";
	$mail->AddAddress($correo, $nomapel);
	/*
	$mail->AddAddress("ellen@example.com");                  // name is optional
	$mail->AddReplyTo("info@example.com", "Information");
	*/
	$mail->WordWrap = 50;                                 // set word wrap to 50 characters
	//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
	$mail->IsHTML(true);                                  // set email format to HTML

	$mail->Subject = "Institucion Educativa Bertha Suttner";
	$mail->Body    = "<p>Estimado(a) Estudiante <strong>".$nomapel."</strong>, se le ha registrado una inasistencia.<br><br>

	No asistió a clase por lo tanto se procede a tomar medidas pertinentes, el estudiante con identificacion: <strong>".$identidad_id."</strong><br>

	Deberá entregar una excusa verídica, para modificar el estado de la asistencia<br>



	Gracias por su atención.<br><br>

	Institución Educativa Bertha Suttner<br> No Reenviar este Correo.</p>";
	//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

	if(!$mail->Send())
	{
	   $mensaje="Problemas al Enviar Correo de Restablecimiento por Favor Consultar al Administrador";
	     echo "Mailer Error: " . $mail->ErrorInfo;
 	  exit;
	}



	}



}

?>