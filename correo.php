<?php
// echo "<h4> !Pa ver ! </h4>";
// if (isset ($_POST ['enviar'])) {
//     if (!empty($_POST['name']) && !empty ($_POST['asunto'])&& !empty ($_POST['msg']) && 
//     !empty ($_POST['email'])) {
        $destinatario = 'alvphpp@gmail.com';
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $email = $_POST['email'];

        $header = "enviado desde alveiro" ;
        $mensajeCompleto = $mensaje . "\nAtentamente" . $nombre;
        // $header.= "X-Mailer: PHP/" . phpversion();
        mail($destinatario,$asunto,$mensajeCompleto, $header);
        echo "<script> alert ('correo enviado exitosamente')</script> ";
        echo "<script> setTimeout (\"location.href='index.html'\",1000)</script> ";
?>    