<?php
$numeroAleatorio =  rand(123456789,999999999);
include('header.php');
if($_POST['submit']){
    $monto = $_POST['monto'];
    $descripcion = "retiro cajero";
    $tipo = "retiro";
    $fecha = date('m-d-Y h:i', time());  
    //COMPROBAR SI HAY FONDOS SUFICIENTES;
    $stmt_comprobacion= $conn->prepare("SELECT fondos FROM cuentas WHERE idCuenta = ?");
    $stmt_comprobacion->bind_param('s',$idUsuario);
    $stmt_comprobacion->execute();
    $stmt_comprobacion->store_result();
    $stmt_comprobacion->bind_result($fondos_db);
    $stmt_comprobacion->fetch();
    $fondos  = $fondos_db;
    if($fondos>$monto){
        $stmt_comprobacion->close();
        $stmt_insert = $conn->prepare("INSERT INTO movimientos (descripcion,monto,tipo,fecha,idUsuario) VALUES (?,?,?,?,?)");
        $stmt_insert->bind_param("sssss",$descripcion,$monto,$tipo,$fecha,$idUsuario);
        $stmt_insert->execute();
        $stmt_insert->close();

        //ACTUALIZAR FONDOS PROPIOS
        $nuevosFondos = $fondos - $monto;
        $stmt_update = $conn->prepare("UPDATE cuentas SET fondos = ? WHERE idCuenta = ?");
        $stmt_update->bind_param('ss',$nuevosFondos,$idUsuario);
        $stmt_update->execute();
        $stmt_update->close();
    }
 

}


?>
<div class="container col-8 text-center mt-5">
Código de autorización
<?php echo $numeroAleatorio;?>
<p class="mb-0 mt-2"><i class="bi bi-clock"></i></p>
<p class="fw-light">Valido por una hora</p>
</div>
<div id="detalles_retiro" class="container col-10 mx-auto">
    <p class="fw-light fs-6 mb-0">Monto</p>
    <p class="fw-lighter fs-6"><?php echo $monto;?></p>
    <p class="fw-light fs-6 mb-0">Fecha de ordenanza</p>
    <p class="fw-lighter fs-6"><?php echo $fecha;?></p>
    <p class="fw-light fs-6 mb-0">ID MOVIMIENTO</p>
    <p class="fw-lighter fs-6">0000006</p>
    <div class="text-center">
    <a href="main_view.php" class="text-secondary text-decoration-none fs-4">Volver</a>
    </div>

</div>



