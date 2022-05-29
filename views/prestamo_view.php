<?php 
include('header.php');
include('../prestamo.php');
?>
<p class="text-center mt-5 mb-0 fs-1">SOLICITAR PRESTAMO</p>
  <p class="text-center mt-2 text-success mb-0"><?php echo $message;?></p>
  <main id="main" class="col-10 mx-auto pt-5 text-center  pb-4">
      <form method="post">
      <div class="input-group mb-3 mx-auto mt-5">
      <span class="input-group-text">$</span>
      <input type="text" class="form-control text-right" aria-label="Dollar amount (with dot and two decimal places)" placeholder="0.00" id="monto" name="monto">
    </div>
          <input type="submit" value="Solicitar Prestamo" name="submit" id="submit" class="btn bg-success text-white mb-3">
      </form>
  </main>