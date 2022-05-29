<?php 
include('header.php');
include("../transferir.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transacción</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

   

    <div class = "container mt-4">
    <div class = "row">
        <div class="col-2"></div>
        <div class="col-8">
            <form  method="POST">
                <div class="mb-3">
                  <label class="form-label">Nombres del beneficiario</label>
                  <input type="text" class="form-control" name="nombres" id="nombres">
                </div>

                <div class="mb-3">
                  <label  class="form-label">Apellidos del beneficiario</label>
                  <input type="text" class="form-control" name="apellidos" id="apellidos">
                </div>

                <div class="mb-3">
                  <label  class="form-label">Número de cuenta del beneficiario</label>
                  <input type="text" class="form-control" name="nCuenta" id="nCuenta">
                </div>

                <div class="mb-3">
                  <label  class="form-label">Monto</label>
                  <input type="number" class="form-control" name="monto" id="monto">
                </div>
  
                
              <div class="d-grid gap-2">
              <input type="submit" value="Enviar" name="btn" id="submit" class="btn bg-success text-white mb-3">

              </div>
                
               
              </form>
              

        </div>
        <div class="col-2"></div>




    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>