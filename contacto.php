<?php
if($_POST["nombre"] && $_POST["email"] && $_POST["mensaje"] != ""){
    $de = $_POST["nombre"];
    $destino = "partnerig11@gmail.com";
    $asunto = "Formulario de Contacto";
    $mensaje .= "Formulario."."\n";
    $mensaje .= "\n";
    $mensaje .= "Nombre: " . utf8_decode($_POST["nombre"]) ."\n";
    $mensaje .= "\n";
    $mensaje .= "Correo: " . utf8_decode($_POST["email"]) ."\n";
	 $mensaje .= "Mensaje: " . utf8_decode($_POST["mensaje"]) ."\n";
    $mensaje .= "\n";
    $emailheader = "De: formulario de contacto de tu pagina web\r\n";
mail($destino, $asunto, $mensaje, $emailheader) or die ("Lo sentimos, tu solicitud no ha sido enviada.<br/>Intentelo de nuevo.");
echo utf8_decode(utf8_encode('Tu consulta ha sido enviada correctamente.'));
    } else {
    if($_POST["nombre"] == ""){
    echo utf8_encode ('Por favor, indica tu nombre.');
    exit; }
    if($_POST["email"] == ""){
    echo utf8_encode ('Por favor, indica un email de contacto.');
    exit; }
	if($_POST["mensaje"] == ""){
    echo utf8_encode ('Por favor, escribe tu mensaje.');
    exit; }
}