<?php
//Encio de los correos vista
// Varios destinatarios
$especialista=$_SESSION['Nombre'];
$correo=$usuario[0]['Correo'];
$para  = $correo . ', '; // atención a la coma
//$para = 'wez@example.com' . ', ';

// título
$título = 'Te han rechazado el especialista';


// mensaje
$mensaje = '
<html>
<head>
    <meta charset="UTF8" />
    <link rel=StyleSheet href="../css/style.css" type="text/CSS">
  <title>Notificacion de Rechazo</title>
</head>
<body>
<h1>  El especialista '.$especialista.'  </h1>
  <p>Te ha rechazado, pero no te preocupes puedes enviar a otro especialista.</p>
  
 <h2></h2>
  
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: ' .$correo . "\r\n";
$cabeceras .= 'From: Especialista te ha rechazado <notificacion@example.com>' . "\r\n";
$cabeceras .= 'Cc: notificacion@example.com' . "\r\n";
$cabeceras .= 'Bcc: notificacion@example.com' . "\r\n";

// Enviarlo
$enviado=false;
if(mail($para, $título, $mensaje, $cabeceras)){
   $enviado=true;
}




?>