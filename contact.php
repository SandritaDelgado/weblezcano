<?php
//a ver ahora, necesita 4 campos, lo del php es para darle formato, pero con una sola orden deberia
//mandarte el correo. siii
//vamos a ver si llegar aqui
//mail('', 'Mensaje de mi sitio web','hollaaa','Holi San');
//subelo

$exito = mail("sandra_bonifa@hotmail.com","Recuperación de contraseña", "Actualmente podr");
//echo "que tal";

if ($exito){
    header("Location:confirma.html");
} else {
    echo "no encuentro una mierda";
}

?>