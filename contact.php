<?php
//a ver ahora, necesita 4 campos, lo del php es para darle formato, pero con una sola orden deberia
//mandarte el correo. siii
//vamos a ver si llegar aqui
//mail('', 'Mensaje de mi sitio web','hollaaa','Holi San');
//subelo

//$exito = mail("sandra_bonifa@hotmail.com","Recuperación de contraseña", "Actualmente podr");
//echo "que tal";

// Varios destinatarios
//vamos a ver primero que se envie el mensaje
$para = 'sandra_bonifa@hotmail.com';

// título
$título = 'Recordatorio de cumpleaños para Agosto';

// mensaje
$mensaje = '
<html>
<head>
  <title>Recordatorio de cumpleaños para Agosto</title>
</head>
<body>
  <p>¡Estos son los cumpleaños para Agosto!</p>
  <table>
    <tr>
      <th>Quien</th><th>Día</th><th>Mes</th><th>Año</th>
    </tr>
    <tr>
      <td>Joe</td><td>3</td><td>Agosto</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17</td><td>Agosto</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
$exito = mail($para, $título, $mensaje, $cabeceras);

if ($exito){
    header("Location:confirma.html");
} else {
    echo "no encuentro una mierda";
}

?>