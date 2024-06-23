<?php
// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario de manera segura
    $name = htmlspecialchars($_POST['your-name']);
    $email = htmlspecialchars($_POST['your-email']);
    $message = htmlspecialchars($_POST['message']);

    // Configurar los destinatarios del correo electrónico (separados por coma si son varios)
    $to = "ex3m.sgo@gmail.com, benjaguerrero23@gmail.com"; 
    $subject = "Mensaje de contacto desde el sitio web de EX3M";
    $body = "Nombre: $name\nEmail: $email\n\n$message";

    // Configurar las cabeceras del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";

    // Envía el correo electrónico
    if (mail($to, $subject, $body, $headers)) {
        echo "¡Gracias por contactarnos! Tu mensaje ha sido enviado.";
    } else {
        echo "Hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
