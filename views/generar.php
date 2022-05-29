<?php 
$fecha = getdate();
$nombre = "RICARDO";
$apellido = "CERNA";
$caracteres = $nombre[0].$apellido[0];
echo $fecha['mon'];
echo $caracteres;
$numero_cuenta = $caracteres.$fecha['seconds'].$fecha['minutes'].$fecha['mon'].$fecha['year'];
echo $numero_cuenta;
?>