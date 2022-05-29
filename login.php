<?php 
session_start();
$message = "";
if(isset($_POST['submit'])){
    if(empty($_POST['user']) OR empty($_POST['pass'])){
        $message = "Favor rellenar todos los campos";
    }else{
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        require('conn.php');
        $stmt = $conn->prepare("SELECT id_usuario,usuario,pass FROM users WHERE usuario = ?");
        $stmt->bind_param('s',$user);
        if(!$stmt->execute()){
            /*echo "FALLO LA EJECUCION (".$stmt->errno .") " . $stmt->error;*/
        }
        $stmt->store_result();
        $stmt->bind_result($db_id,$db_user,$db_pass);
        $rows = $stmt->num_rows;
        if($rows>0){
            while($stmt->fetch()){
                $user_data['id'] = $db_id;
                $user_data['user'] = $db_user;
                $user_data['pass'] = $db_pass;
            }
            if(password_verify($pass,$user_data['pass'])){
                $_SESSION['user_id'] = $user_data['id'];
                header('Location: main_view.php');
            }else{
                $message = "contraseña incorrecta";
            }
        }else{
            $message = "usuario incorrecto";
        }
    }
}
?>