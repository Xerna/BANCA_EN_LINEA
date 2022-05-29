<?php
include('conn.php');
$stmt = $conn->prepare("SELECT descripcion,monto,fecha,tipo,fecha FROM movimientos WHERE idUsuario = ?");
$stmt->bind_param('s',$idUsuario);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($descripcion,$monto,$fecha,$tipo,$fecha);
$i = 0;
$rows = $stmt->num_rows;
if($rows>0){
    while($stmt->fetch()){
        $movimientos[$i]['descripcion'] = $descripcion;
        $movimientos[$i]['monto'] = $monto;
        $movimientos[$i]['fecha'] = $fecha;
        $movimientos[$i]['tipo'] = $tipo;
        $i++;
        }
}
$stmt->close();
?>