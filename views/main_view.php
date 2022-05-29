<?php 
include('header.php');
include('../main.php')
?>
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
        <p class="fw-lighter mt-3 text-center" style="font-size: 0.8rem;"><a href="transferir_view.php" class="text-decoration-none text-black">TRASNFERIR</a></p>
        </div>
        <div class="option-item col-3 d-flex justify-content-center flex-column align-items-center">
        <div class="bg-success d-flex justify-content-center align-items-center" style="height: 3.5rem; width: 3.5rem;border-radius:50%;">
        <i class="bi bi-bank2" style="font-size: 2rem; color:white"></i>
        </div>
        <p class="fw-lighter mt-3 text-center" style="font-size: 0.8rem;"><a href="prestamo_view.php" class="text-decoration-none text-black">SOLICITAR PRESTAMO</a></p>
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