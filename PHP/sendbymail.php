<?php 

    if (isset($_POST['action'])) {
        if (!empty($_POST['check'])) {
            
        if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['mensaje']) && !empty($_POST['check'])) {

            $Nombre_m = $_POST['nombre'];
            $email_m = $_POST['correo'];
            $tel_m = $_POST['telefono'];
            $servicios = $_POST['mensaje'];
            
            $email_to ="antxtolentino@gmail.com";
            $email_subject = "Prospecto_Formulario";
            $email_from = $email_m;
            $email_message = "Detalles del Prospecto:\n\n";
            $email_message .= "Nombre: " . $Nombre_m . "\n";
            $email_message .= "E-mail: " . $email_m . "\n";
            $email_message .= "Telefono: " . $tel_m . "\n";
            $email_message .= "Mensaje : " . $servicios . "\n";

            $headers = 'From: '.$email_from."\r\n".
            'Reply-To: '.$email_from. " " .
            'X-Mailer: PHP/' . phpversion();
            $err = mail($email_to, $email_subject, $email_message, $headers);
            if (mail($email_to, $email_subject, $email_message, $headers)) {
                $message = 2;
            }else{
                $message = 3;
            }

        }else{
            $message = 1;
        }
        }else{
            $message = 4;
        }
    }

 ?>