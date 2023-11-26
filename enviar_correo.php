<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $website = $_POST["website"];
  $message = $_POST["message"];

  $to = "akaisu25@gmail.com";
  $subject = "Nuevo mensaje de contacto";
  $headers = "From: $email";

  // Puedes personalizar el contenido del correo electrónico según tus necesidades
  $email_content = "Nombre: $name\n";
  $email_content .= "Correo electrónico: $email\n";
  $email_content .= "Asunto: $subject\n";
  $email_content .= "Sitio web: $website\n\n";
  $email_content .= "Mensaje:\n$message";

  // Envía el correo electrónico
  mail($to, $subject, $email_content, $headers);

  // Puedes redirigir a una página de agradecimiento u otra página después de enviar el correo electrónico
  header("Location: gracias.html");
  exit();
}
?>
