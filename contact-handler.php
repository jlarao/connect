<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitización básica
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_SPECIAL_CHARS);
    $location = filter_var($_POST['location'], FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS);

    $to = CONTACT_EMAIL;
    $subject = "Nueva Solicitud de Contratación: $name";
    
    $email_content = "Has recibido una nueva solicitud desde el sitio web.\n\n";
    $email_content .= "Nombre: $name\n";
    $email_content .= "Teléfono/WhatsApp: $phone\n";
    $email_content .= "Ubicación: $location\n";
    $email_content .= "Mensaje: $message\n";

    $headers = "From: webmaster@conectateya.mx\r\n";
    $headers .= "Reply-To: webmaster@conectateya.mx\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Nota: El envío de correo puede fallar si no hay un servidor SMTP configurado en XAMPP.
    // En un entorno real, usaríamos PHPMailer o una API como SendGrid.
    $mail_sent = @mail($to, $subject, $email_content, $headers);

    // Guardar en un log local como respaldo (uploads/leads.txt)
    $log_entry = date('Y-m-d H:i:s') . " | $name | $phone | $location | $message\n";
    file_put_contents('uploads/leads.txt', $log_entry, FILE_APPEND);

    // Redirección con parámetro de éxito
    header("Location: index.php?success=1#contacto");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>
