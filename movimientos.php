<?php
 $idUsuario = "1";
$conn = new mysqli('localhost','root','','banca_en_linea');
if($conn->connect_errno){
    die("HUBO UN PROBLEMA".$conn->connect_error);
}
$select_stmt = $conn->prepare("SELECT descripcion,monto,fecha,tipo,fecha FROM movimientos WHERE idUsuario = ?");
$select_stmt->bind_param('s',$idUsuario);
$select_stmt->execute();
$select_stmt->store_result();
$select_stmt->bind_result($descripcion,$monto,$fecha,$tipo,$fecha);
$i = 0;
while($select_stmt->fetch()){
$movimientos[$i]['descripcion'] = $descripcion;
$movimientos[$i]['monto'] = $monto;
$movimientos[$i]['fecha'] = $fecha;
$movimientos[$i]['tipo'] = $tipo;
$i++;
}
$select_stmt->close();

$datos_stmt = $conn->prepare("SELECT nombre,apellido FROM usuarios WHERE idUsuario = ?");
$datos_stmt->bind_param('s',$idUsuario);
$datos_stmt->execute();
$datos_stmt->store_result();
$datos_stmt->bind_result($nombre,$apellido);
$datos_stmt->fetch();
$datos['nombre'] = $nombre;
$datos['apellido'] = $apellido;
$datos_stmt->close();
?>