<?php 
$message = "";
$fecha = getdate();
if(isset($_POST['submit'])){
    if(empty($_POST['user']) OR empty($_POST['pass']) OR empty($_POST['pass2'])){
        $message = "Favor rellenar todos los campos";
    }else{
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if($pass == $pass_confirm){
            $password = password_hash($pass,PASSWORD_BCRYPT);
            require('conn.php');
            $stmt = $conn->prepare("INSERT INTO users (usuario,pass) VALUES (?,?)");
            $stmt->bind_param('ss',$user,$password);
            if($stmt->execute()){
                $message = "usuario creado con exito";
            }else{
                $message = "Ha ocurrido un error favor intentarlo mas tarde";
            }
        }else{
            $message = "Las contraseñas no coinciden!";
        }
        $stmt->close();
        $create_account_stmt = $conn->prepare("INSERT INTO cuentas (idCuenta,fondos,idUsuario) VALUES (?.?,?)");
    }
}
?>