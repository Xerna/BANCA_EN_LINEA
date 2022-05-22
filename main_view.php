<?php 
include('main.php')
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
    <main id="main" class="container col-10 rounded shadow mx-auto p-3 mt-5">
        <p id="numero_de_cuenta" class="fs-5 mb-0">N° CUENTA: <?php echo $datos['nCuenta'];?></p>
        <p id="tipo_de_cuenta" class="fs-6 mb-0 fw-light">Cuenta de ahorro</p>
        <div id="saldo_disponible">
            <p class="fs-6 mb-0 fw-light">Saldo Disponible</p>
            <p class="fs-5 text-success">$<?php echo $datos['fondos'];?></p>
        </div>
        <div class="text-end">
        <a href="movimientos_view.php" class="fw-lighter fs-6 text-end text-dark outline text-decoration-none text-capitalize">ver movimientos</a>
        </div>
    </main>
    <hr class="mx-auto col-8 mt-5">
    <section id="options" class="container-fluid mt-4">
    <div class="row">
      <div class="col-10 mx-auto d-flex justify-content-between align-items-start">
        <div class="option-item col-3 d-flex justify-content-center flex-column align-items-center">
        <div class="bg-success d-flex justify-content-center align-items-center" style="height: 3.5rem; width: 3.5rem;border-radius:50%;">
        <i class="bi bi-send" style="font-size: 2rem; color:white"></i>
        </div>
        <p class="fw-lighter mt-3 text-center" style="font-size: 0.8rem;">TRANSFERIR</p>
        </div>
        <div class="option-item col-3 d-flex justify-content-center flex-column align-items-center">
        <div class="bg-success d-flex justify-content-center align-items-center" style="height: 3.5rem; width: 3.5rem;border-radius:50%;">
        <i class="bi bi-bank2" style="font-size: 2rem; color:white"></i>
        </div>
        <p class="fw-lighter mt-3 text-center" style="font-size: 0.8rem;">SOLICITAR PRESTAMO</p>
        </div>
        <div class="option-item col-3 d-flex justify-content-center flex-column align-items-center">
        <div class="bg-success d-flex justify-content-center align-items-center" style="height: 3.5rem; width: 3.5rem;border-radius:50%;">
        <i class="bi bi-wallet" style="font-size: 2rem; color:white"></i>
        </div>
        <p class="fw-lighter mt-3 text-center" style="font-size: 0.8rem;"><a href="retiro_view.php" class="text-decoration-none text-black">RETIRO SIN TARJETA</a></p>
        </div>
      </div>
      </div>
    </section>
    <!-- JavaScript Bundle with Popper-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>