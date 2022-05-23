<?php 
include('retiro.php');
include('header.php');
?>
<div id="tittle" class="container mt-4 text-center mx-auto col-10">
<h3 style="font-size: 0.8rem;">DIGITE EL MONTO QUE DESEA RETIRAR</h3>
</div>
<hr class="mt-1 col-6 mx-auto">
<div class="col-8 text-center mx-auto mt-5">
<i class="bi bi-currency-exchange " style="font-size: 3.5rem"></i>
</div>
<form action="retiro.php" method="$_POST">
<div class="container col-10 mt-5 pt-3">
<div class="input-group mb-3 mx-auto mt-5">
  <span class="input-group-text">$</span>
  <input type="text" class="form-control text-right" aria-label="Dollar amount (with dot and two decimal places)" placeholder="0.00" id="monto" name="monto">
</div>
</div>
<div class="container d-flex justify-content-center col-10 mt-4">
<button class="btn btn-success px-5">GENERAR CODIGO</button>
</div>
</form>

<?php echo $monto;?>
 <!-- JavaScript Bundle with Popper-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>