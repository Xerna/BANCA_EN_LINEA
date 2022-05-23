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
?>