<?php
    $destinatario = 'diana.miil@outlook.com'; //a este correo se enviara el formulario

    $nombre = $_POST['nombre']; // reciebiendo el nombre de Post y lo guardo en una variable llamada nombre
    $email = $_POST['email']; // reciebiendo el email de Post y lo guardo en una variable llamada email
    $asunto = $_POST['asunto']; // reciebiendo el asunto de Post y lo guardo en una variable llamada asunto
    $mensaje = $_POST['mensaje']; // reciebiendo el mensaje de Post y lo guardo en una variable llamada mensaje

    $motivo = "Enviado desde Eureek'a"; //cabecera del correo
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre; //lo que va a decir el correo

    mail($destinatario, $motivo, $mensajeCompleto); //funcion para enviar el correo

   // echo "<sricpt>alert('Correo enviado exitosamente')</script>"; //avisar que se envio el correo


?>