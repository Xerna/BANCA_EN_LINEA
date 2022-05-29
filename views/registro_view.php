<?php 
include('../registro.php')
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
  <?php echo $message;?>
  <div class="container mx-auto bg-dark">
    <p class="navbar-brand text-light py-3 mb-0 pl-3 text-center bg-dark">BANCA EN LINEA</p>
  </div>
  <p class="text-center mt-5 mb-0 fs-1">REGISTRARSE</p>
  <main id="main" class="col-10 mx-auto pt-5 text-center shadow pb-4" style="margin-top: 2rem;">
      <form method="post">
          <input type="text" placeholder="USUARIO" class="mb-3 p-2" name="user" id="user">
          <input type="text" placeholder="PRIMER NOMBRE" class="mb-3 p-2" name="p_nombre" id="p_nombre">
          <input type="text" placeholder="SEGUNDO NOMBRE" class="mb-3 p-2" name="s_nombre" id="s_nombre">
          <input type="text" placeholder="APELLIDO" class="mb-3 p-2" name="p_apellido" id="p_apellido">
          <input type="text" placeholder="SEGUNDO APELLIDO" class="mb-3 p-2" name="s_apellido" id="s_apellido">
          <input type="text" placeholder="NUMERO DE DUI: 01234567-8" class="mb-3 p-2" name="s_apellido" id="s_apellido">
          <input type="password" placeholder="CONTRASEÑA" class="mb-3 p-2" name="pass" id="pass">
          <input type="password" placeholder="REPITA SU CONTRASEÑA" class="mb-3 p-2" name="pass2" id="pass2">
          <input type="submit" value="Registrarse" name="submit" id="submit" class="btn bg-success text-white mb-3">
      </form>
      <p class="text-decoration-none text-secondary mt-3 mb-0">¿Ya tienes una cuenta?</p>
      <a href="../login_view.php"  style="font-size: 0.8rem;">Iniciar Sesion</a>
  </main>
</body>
</html>