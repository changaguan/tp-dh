<?php require_once("config.php");
if ($auth->estaLogueado()) {
  $user = $db->traerPorMail($_SESSION["logueado"]);
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/signsuccess.css">

  </head>
  <body>
      <!-- Header -->
      <?php include('main-header.php') ?>
      <!-- --------------- -->

      <!-- Menu-Bar -->
      <?php include('main-nav.php') ?>
      <!-- --------------- -->



      <div class="col-md-12">

        <div class="mensajesuccess">
          <strong>Perfecto! </strong> Su registro fue satisfactorio.
        </div>

        <div class="imagensuccess">
          <img src="images/successwhite.jpg">
        </div>

        <div class="linksinicioperfil">
          <div class="row">
            <div class="col-md-6">
              <button type="button" class="btn btn-primary ml-auto login" data-toggle="modal" data-target="#myModal"><a href="index.php" style="color:white;">Inicio</a></button>
            </div>
            <div class="col-md-6">
              <button type="button" class="btn btn-primary ml-auto login" data-toggle="modal" data-target="#myModal"><a href="<?php //"profile.php?username=". $username->getUsername() ?>" style="color:white;">Perfil</a></button>
            </div>
          </div>
        </div>

      </div>



      <!-- --------------- -->

      <!-- Aside-Bar -->
      <?php include('aside.php') ?>
      <!-- --------------- -->

      <!-- Footer -->
      <?php include('main-footer.php') ?>
      <!-- --------------- -->


  </body>
</html>
