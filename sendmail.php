<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $plan = htmlspecialchars($_POST['plan'] ?? '');

    if ($email) {
        $to = 'chumbi@imaquinua.com';
        $subject = 'Nueva solicitud de plan';
        $message = "Nombre: $name\n" .
                   "Correo del usuario: $email\n" .
                   "Plan elegido: $plan";
        $headers = "From: no-reply@miempresa.com\r\n".
                   "Reply-To: no-reply@miempresa.com";

        if (mail($to, $subject, $message, $headers)) {
            echo 'Correo enviado correctamente';
        } else {
            echo 'Error al enviar el correo';
        }
    } else {
        echo 'Email inválido';
    }
} else {
    echo 'Método no permitido';
}
?>
