<?php 
include('../login.php');
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
  <div class="container mx-auto bg-dark">
    <p class="navbar-brand text-light py-3 mb-0 pl-3 text-center bg-dark">BANCA EN LINEA</p>
  </div>
  <p class="text-center mt-5 mb-0">Bienvenido a la aplicación <br>BANCA EN LINEA</p>
  <?php if (!empty($message)) : ?>
        <p class="text-danger text-center mt-5"><?php echo $message; ?></p>
    <?php endif;?>  
  <main id="main" class="col-10 mx-auto bg-lighter pt-5 text-center" style="margin-top: 3rem;">
      <form action="" method="post">
          <input type="text" placeholder="usuario" class="mb-3 p-2" name="user" id="user">
          <input type="password" placeholder="*******" class="mb-3 p-2" name="pass" id="pass">
          <input type="submit" value="Iniciar Sesion" name="submit" class="btn bg-success text-white mb-3">
      </form>
      <p class="text-decoration-none text-secondary mt-3 mb-0">¿No tienes una cuenta?</p>
      <a href="views/registro_view.php" class="" style="font-size: 0.8rem;">Registrate ahora</a>
  </main>