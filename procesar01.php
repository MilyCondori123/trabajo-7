<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge el nombre enviado desde el formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    
    // Verifica si se recibió un nombre
    if (!empty($nombre)) {
        echo "Bienvenido, " . $nombre . "! Gracias por Registrate.";
    } else {
        echo "Por favor, ingresa tu nombre.";
    }
}
?>
