<?php
session_start();
$idUsuario = $_SESSION['user_id'];
include('../conn.php');
$select_user_stmt = $conn->prepare("SELECT nombre,apellido FROM users WHERE id_usuario = ?");
$select_user_stmt->bind_param('s',$idUsuario);
$select_user_stmt->execute();
$select_user_stmt->store_result();
$select_user_stmt->bind_result($nombre,$apellido);
$select_user_stmt->fetch();
$datos['nombre'] = $nombre;
$datos['apellido'] = $apellido;
$select_user_stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>BANCA EN LINEA</title>
</head>
<body>
<nav class="navbar bg-dark navbar-expand pb-0">
  <div class="container-fluid d-flex flex-column col-8 mx-auto">
    <a class="navbar-brand text-light pb-0 mb-0">BANCA EN LINEA</a>
    <ul class="navbar-nav text-light">
      <li class="nav-link">
      <a href="main_view.php" style="color:white; font-size:1.25rem;" ><i class="bi bi-arrow-left"></i></a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item dropdown">  
          <a class="nav-link dropdown-toggle text-light d-flex align-items-center justify-content-between" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="pr-3"><?php echo $datos['nombre']." ".$datos['apellido'];?></span>&nbsp;&nbsp;
          <i class="bi bi-person-circle" style="font-size: 1.2rem; color:white"></i>
          </a>
          <ul class="dropdown-menu bg-light text-light" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">CERRAR SESION</a></li>
          </ul>
    </ul>
  </div>
</nav>