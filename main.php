<?php 
include('../conn.php');
$stmt = $conn->prepare("SELECT * FROM cuentas WHERE idUsuario = ?");
$stmt->bind_param('s',$idUsuario);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($numeroCuenta,$fondos,$idUsuarios);
$stmt->fetch();
$datos['nCuenta'] = $numeroCuenta;
$datos['fondos'] = $fondos;
$stmt->close();
?>