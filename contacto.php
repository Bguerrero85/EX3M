<?php
// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $name = $_POST['your-name'];
    $email = $_POST['your-email'];
    $message = $_POST['message'];

    // Configura los datos del correo electrónico
    $to = "ex3m.sgo@gmail.com"; // Cambia esto por tu dirección de correo electrónico
    $subject = "Mensaje de contacto desde el sitio web de EX3M";
    $body = "Nombre: $name\nEmail: $email\n\n$message";

    // Envía el correo electrónico
    if (mail($to, $subject, $body)) {
        echo "¡Gracias por contactarnos! Tu mensaje ha sido enviado.";
    } else {
        echo "Hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
