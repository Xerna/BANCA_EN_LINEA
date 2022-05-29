<?php
include("conn.php");

if(isset($_POST['btn'])){
    $nCuenta= $_POST['nCuenta'];
    $monto = $_POST['monto'];

    $stmt3 = $conn->prepare("SELECT idCuenta, fondos FROM cuentas WHERE idCuenta = ?");
    $stmt3->bind_param('s',$idUsuario);
    $stmt3->execute();
    $stmt3->store_result();
    $stmt3->bind_result($idCuenta, $fondos);
    $stmt3->fetch();
    $id = $idCuenta;
    $fond = $fondos;
    $stmt3->close();


    $stmt4 = $conn->prepare("SELECT fondos FROM cuentas WHERE idCuenta = ?");
    $stmt4->bind_param('s',$idUsuario);
    $stmt4->execute();
    $stmt4->store_result();
    $stmt4->bind_result($fondos);
    $stmt4->fetch();
    $fondUser = $fondos;
    $stmt4->close();
    
    echo $id,$fond;
    if(empty($_POST['nombres']) OR empty($_POST['apellidos']) OR empty($_POST['nCuenta']) OR empty($_POST['monto'])){
        $message = "Favor rellenar todos los campos";
       echo $message;
        
    }
    else if ($id=="" or $nCuenta == $idUsuario) {
        echo"Numero de cuenta invalido";
    }
    else if($fondUser<$monto){
        echo"No posees suficientes fondos para poder hacer la transferencia";
    }
    else{
        $fecha = date('d/m/Y');
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        
        
        $descripcion = "Usted depósito a ".$nombres." ".$apellidos;
        $tipo ="Transferencia";
        

     
    require('conn.php');
        
        $stmt = $conn->prepare("INSERT INTO movimientoss (descripcion,monto,tipo,fecha,idUsuario,nCuenta) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param('ssssss',$descripcion,$monto,$tipo,$fecha,$idUsuario,$nCuenta);
        
        $rest = $fondUser - $monto;
        $save=$fond+$monto;

 

       $stmt2 = $conn->prepare("UPDATE cuentas SET fondos = ? WHERE idCuenta = ?");
        $stmt2->bind_param('ss',$save,$nCuenta);
        
        $stmt5 = $conn->prepare("UPDATE cuentas SET fondos = ? WHERE idCuenta = ?");
        $stmt5->bind_param('ss',$rest,$idUsuario);

        if($stmt2->execute() &&  $stmt->execute()  && $stmt5->execute()){
            $message = "usuario creado con exito";
            echo $message;
        }else{
            $message = "Ha ocurrido un error favor intentarlo mas tarde";
        }

  
    }
}


?>