<?php 
$idUsuario = '1';
$conn = new mysqli('localhost','root','','banca_en_linea');
if($conn->connect_errno){
    die("HUBO UN PROBLEMA".$conn->connect_error);
}
$select_stmt = $conn->prepare("SELECT * FROM cuentas WHERE idUsuario = ?");
$select_stmt->bind_param('s',$idUsuario);
$select_stmt->execute();
   $select_stmt->store_result();
   $select_stmt->bind_result($numeroCuenta,$fondos,$idUsuarios);
    $select_stmt->fetch();
    $datos['nCuenta'] = $numeroCuenta;
    $datos['fondos'] = $fondos;
    $select_stmt->close();
    
    $select_user_stmt = $conn->prepare("SELECT * FROM usuarios WHERE idUsuario = ?");
    $select_user_stmt->bind_param('s',$idUsuario);
    $select_user_stmt->execute();
    $select_user_stmt->store_result();
    $select_user_stmt->bind_result($idUsuario_usuario,$nombre,$apellido);
    $select_user_stmt->fetch();
    $datos['nombre'] = $nombre;
    $datos['apellido'] = $apellido;
    $select_user_stmt->close();
?>