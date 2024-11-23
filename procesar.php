<?php
/*if(isset($_REQUEST['nombre'])){
    echo "Hola, mi nombre ingresado es : ".$_REQUEST['nombre'];
}*/

$nombre = $_REQUEST['nombre'];
$edad = $_REQUEST['edad'];
$telefono = $_REQUEST['telefono'];
$direccion = $_REQUEST['direccion'];

if(isset($nombre) && isset($edad) && isset($telefono) && isset($direccion)) {
    echo "Hola, mi nombre es: " . $nombre . "<br>";
    echo "Mi edad es: " . $edad . "<br>";
    echo "Mi teléfono es: " . $telefono . "<br>";
    echo "Mi dirección es: " . $direccion . "<br>";
}
?>
