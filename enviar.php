<?php 

    $destino = "angelrojas@ciencias.unam.mx";   
    $nombre = $_Post["nombre"];
    $correo = $_Post["correo"];
    $telefono = $_Post["telefono"];
    $asunto = $_Post["asunto"];
    $mensaje = $_Post["mensaje"]; 

    $contenido = "Nombre: " . $nombre . "\nCorreo" . $correo . "\nTeléfono" . $telefono . "\nAsunto" . $asunto . "\nMensaje" . $mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location:gracias.html");
?>