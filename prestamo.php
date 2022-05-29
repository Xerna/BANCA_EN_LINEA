<?php
include('conn.php');
$message ="";
if(!isset($_POST['submit']) ? $_POST['submit'] = false : $_POST['submit'] = true);
if($_POST['submit']){
    $monto = $_POST['monto'];
    //COMPROBAR LOS FONDOS PARA SUMAR EL PRESTAMO;
    $stmt_comprobacion= $conn->prepare("SELECT fondos FROM cuentas WHERE idCuenta = ?");
    $stmt_comprobacion->bind_param('s',$idUsuario);
    $stmt_comprobacion->execute();
    $stmt_comprobacion->store_result();
    $stmt_comprobacion->bind_result($fondos_db);
    $stmt_comprobacion->fetch();
    $fondos  = $fondos_db;
    $stmt_comprobacion->close();
    $nuevo_monto = $monto+$fondos;
    //ACTUALIZAR LOS FONDOS QUE POSEE LA CUENTA
    $stmt_update = $conn->prepare("UPDATE cuentas SET fondos = ? WHERE idCuenta = ?");
    $stmt_update->bind_param('ss',$nuevo_monto,$idUsuario);
    if($stmt_update->execute()){
        $message = "SE HAN DEPOSITADOS LOS FONDOS A SU CUENTA";
        $stmt_update->close();
    }
    //REGISTRAR MOVIMIENTO
    $descripcion = "DEPOSITO DEL BANCO";
    $tipo = "prestamo";
    $fecha = date('m-d-Y h:i', time()); 
    $stmt_insert = $conn->prepare("INSERT INTO movimientos (descripcion,monto,tipo,fecha,idUsuario) VALUES (?,?,?,?,?)");
    $stmt_insert->bind_param("sssss",$descripcion,$monto,$tipo,$fecha,$idUsuario);
    $stmt_insert->execute();
    $stmt_insert->close();
}
?>