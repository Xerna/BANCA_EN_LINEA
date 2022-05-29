<?php 
include('header.php');
include('../movimientos.php');
?>
<div class="tittle mt-3 h-4">
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