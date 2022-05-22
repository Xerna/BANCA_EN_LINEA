<?php 
include('movimientos.php');
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light d-flex align-items-center justify-content-between" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="pr-3"><?php echo $datos['nombre']." ".$datos['apellido'];?></span>&nbsp;&nbsp;
          <i class="bi bi-person-circle" style="font-size: 1.2rem; color:white"></i>
          </a>
          <ul class="dropdown-menu bg-light text-light" aria-labelledby="navbarDropdown2">
            <li><a class="dropdown-item" href="#">CERRAR SESION</a></li>
          </ul>
    </ul>
  </div>
</nav>
<div class="tittle mt-3 h-4 d-flex justify-content-evenly">
  <a href="main_view.php"><i class="bi bi-arrow-left" style="font-size: 1.25rem; color:black"></i></a>
  <h6 class="text-center "style="font-size: 1.25rem">MOVIMIENTOS</h3>
</div>
<main id="main" class="container mt-3 mx-auto shadow-sm p-3 col-11">
  <?php foreach($movimientos as $movimiento): ?>
    <div class="movimiento-item row d-flex align-items-center">
    <div class="col-8">
    <?php if($movimiento['tipo'] == "retiro" OR $movimiento['tipo'] == "transferencia"  OR $movimiento['tipo'] == "pago"):?>
      <p class="fs-6 text-danger mb-0"><?php echo $movimiento['descripcion']?></p><!--1-->
      <?php elseif($movimiento['tipo'] == "abono" OR $movimiento['tipo'] == "deposito"): ?>
        <p class="fs-6 text-success mb-0"><?php echo $movimiento['descripcion']?></p><!--1-->
        <?php endif;?>
        <p class="text-muted mt-0" style="font-size: 0.8rem;"><?php echo $movimiento['fecha']?></p><!--2-->
        </div>
        <div class="col-1">
          <?php if($movimiento['tipo'] == "retiro" OR $movimiento['tipo'] == "transferencia"  OR $movimiento['tipo'] == "pago"):?>
                    <p class="fs-4 text-danger">-$<?php echo $movimiento['monto'];?></p><!--1-->
                <?php elseif($movimiento['tipo'] == "abono" OR $movimiento['tipo'] == "deposito"): ?>
                  <p class="fs-4 text-success">+$<?php echo $movimiento['monto'];?></p><!--1-->
                  <?php endif;?>
                </div>
        </div>
        <hr class="mt-0">
    <?php endforeach;?>   
</main>
 <!-- JavaScript Bundle with Popper-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>