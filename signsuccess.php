<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/forms.css">
  </head>
  <body>
      <!-- Header -->
      <?php include('main-header.php') ?>
      <!-- --------------- -->

      <!-- Menu-Bar -->
      <?php include('main-nav.php') ?>
      <!-- --------------- -->

      <strong>Perfecto!</strong> Su registro fue satisfactorio.
      <br>
      <img src="images/successwhite.jpg">
      <br>
      <a href="index.php"> Volver al inicio </a>
      <a href="profile.php"> Ir a Mi Perfil </a>

      <!-- --------------- -->

      <!-- Aside-Bar -->
      <?php include('aside.php') ?>
      <!-- --------------- -->

      <!-- Footer -->
      <?php include('main-footer.php') ?>
      <!-- --------------- -->


  </body>
</html>
