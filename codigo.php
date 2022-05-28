<?php
$numeroAleatorio =  rand(123456789,999999999);
include('header.php');
?>
<div class="container col-8 text-center mt-5">
Código de autorización
<?php echo $numeroAleatorio;?>
<p class="mb-0 mt-2"><i class="bi bi-clock"></i></p>
<p class="fw-light">Valido por una hora</p>
</div>
<div id="detalles_retiro" class="container col-10 mx-auto">
    <p class="fw-light fs-6 mb-0">Monto</p>
    <p class="fw-lighter fs-6">$5.00</p>
    <p class="fw-light fs-6 mb-0">Fecha de ordenanza</p>
    <p class="fw-lighter fs-6">22/05/2022</p>
    <p class="fw-light fs-6 mb-0">ID MOVIMIENTO</p>
    <p class="fw-lighter fs-6">0000006</p>
</div>



