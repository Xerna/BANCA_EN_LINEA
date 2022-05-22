<?php 
include('main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<div id="tittle" class="container mt-4 text-center mx-auto col-10">
<h3 style="font-size: 0.8rem;">DIGITE EL MONTO QUE DESEA RETIRAR</h3>

</div>
<hr class="mt-1 col-6 mx-auto">
<div class="col-8 text-center mx-auto mt-5">
<i class="bi bi-currency-exchange " style="font-size: 3.5rem"></i>
</div>
<div class="container col-10 mt-5 pt-3">
<div class="input-group mb-3 mx-auto mt-5">
  <span class="input-group-text">$</span>
  <input type="text" class="form-control text-right" aria-label="Dollar amount (with dot and two decimal places)" placeholder="0.00">
</div>
</div>
<div class="container d-flex justify-content-center col-10 mt-4">
<button class="btn btn-success px-5 ">SUBMIT</button>
</div>
 <!-- JavaScript Bundle with Popper-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>