<?php require_once("config.php");
// $user = $db->traerPorUsuario($_GET["username"]);
if($auth->estaLogueado()==false){
  header("location:index.php");exit;
}
$user = $db->traerPorMail($_SESSION["logueado"]);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/profile.css">
  </head>
  <body>
    <!-- Header -->
    <?php include('main-header.php') ?>
    <!-- --------------- -->

    <!-- Menu-Bar -->
    <?php include('main-nav.php') ?>
    <!-- --------------- -->

    <div class="container-fluid">
        <div class="main row">
          <div class="col-md-3">
              <div class="perfilusuario">
                  <div class="row">
                      <div class="col-md-8">
                        ¡Bienvenido <?php echo $user->getName();?>!
                        <br>
                        <a href= "editarperfil.php">Editar Perfil</a>
                      </div>
                      <div class="col-md-4">

                          <div class="imagenperfil" style="background-image: url('avatars/<?php echo $user->getAvatar() ?>')"></div>
                      </div>
                  </div>

              </div>
              <div class="opciones">
<!-- <img src="avatars/<?php //echo $user->getAvatar() ?>" width="100"> -->
                  <div class="opcion">
                    <a href= "">Notificaciones</a>
                  </div>
                  <div class="opcion">
                    <a href= "">Mis Ordenes</a>
                  </div>
                  <div class="opcion">
                    <a href= "">Wish List</a>
                  </div>
                  <div class="opcion">
                    <a href= "">Carrito de Compras</a>
                  </div>
                  <div class="opcion">
                    <a href= "">Configuración</a>
                  </div>

              </div>
          </div>
          <div class="col-md-9">
            <div class="col-md-12">
                Notificaciones
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
