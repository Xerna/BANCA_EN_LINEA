<?php 
$message = "";
include('conn.php');
if(isset($_POST['submit'])){
    if(empty($_POST['user']) OR empty($_POST['pass']) OR empty($_POST['pass2'])){
        $message = "Favor rellenar todos los campos";
    }else{
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $pass_confirm = $_POST['pass2'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $DUI = $_POST['dui'];
        //CREAR CUENTA y ID USUARIO
        $id = $nombre[0].$apellido[0].$DUI;
        if($pass == $pass_confirm){
            $password = password_hash($pass,PASSWORD_BCRYPT);
       
            $stmt = $conn->prepare("INSERT INTO users (id_usuario,usuario,pass,nombre,apellido,numeroDUI) VALUES (?,?,?,?,?,?)");
            $stmt->bind_param('ssssss',$id,$user,$password,$nombre,$apellido,$DUI);
            if($stmt->execute()){
                $message = "usuario creado con exito";
            }else{
                $message = "Ha ocurrido un error favor intentarlo mas tarde";
            }
            $stmt->close();
        }else{
            $message = "las contraseñas no coinciden";
        }
   
        $create_account_stmt = $conn->prepare("INSERT INTO cuentas (idCuenta,fondos) VALUES (?,?)");
        $numeroCuenta = $id;
        $fondos = "0.00";
        $create_account_stmt->bind_param('ss',$numeroCuenta,$fondos);
        $create_account_stmt->execute();
        $create_account_stmt->close();
    }
}
?>