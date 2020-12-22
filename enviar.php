<?php 

    $destino = "contacto@brexia.mx";   
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"]; 
    

    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
    mail($destino, "Contacto: ", $contenido);
    header("Location:gracias.php");
?>