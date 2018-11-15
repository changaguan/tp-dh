<?php
/**require_once 'connection.php';
//Traer la DB
$stmt = $conn->prepare("SELECT * FROM users");

$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_OBJ);

$usuario = "";
$contrasena = "";
$errorUsuario = "";
$errorContrasena = "";

if ($_POST) {
	if (empty($errorUsuario) && empty($errorNombre) && empty($errorEmail) && empty($errorContrasena) &&empty($errorRepContrasena)) {
		header("location: bienvenido.php"); exit;
	}

} */
require_once("config.php");
if($auth->estaLogueado()){
  header("location:index.php");exit;
  $user = $db->traerPorMail($_SESSION["logueado"]);
}

$errores = [];
if ($_POST) {
  $errores = $validator->validarLogin($_POST,$db);
  if (count($errores) == 0) {
    // LOGUEAR
        $auth->loguear($_POST["email"]);
    if (isset($_POST["recordame"])) {
      //Quiere que lo recuerde
      $auth->recordame($_POST["email"]);
    }
        header("Location:profile.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
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

    <!-- Contenido-->
    <section class="container">
 			<div class="row justify-content-center">
 				<article class="col-md-5">
 					<div class="auth-form-body mt-3">


   					<h2 class= "row justify-content-center">Inicia Sesión!</h2>

   						<br><br>

   					<form action="login.php" method="POST" enctype="multipart/form-data">

     					<div class="form-group">
     						<label for="">Nombre de usuario / Email:</label>
     						<input type="text" value="<?php  /*echo $usuario;*/ ?>" class="form-control" name="email">
     						<span style="color:red; font-size:12px;"> <?php  if(isset($errores["mail"])){echo $errores["mail"];} ?> </span>
     					</div>

     					<div class="form-group">
     						<label for="">Contraseña:</label>
     						<input type="password" class="form-control" name="password">
     						<span style="color:red; font-size:12px;"> <?php  if(isset($errores["password"])){echo $errores["password"];} ?> </span>
     					</div>

							<a href= "">¿Ha olvidado su contraseña?</a>
							<br><br>
							<label><input type=  "checkbox"> Mantener mi sesión iniciada.</label>

              <br><br>

   						<div class="row justify-content-center">
   						<button type="submit" class="btn btn-primary btn-lg">Iniciar Sesión</button>

   						<br>

 						</div>
 					</form>
 					</div>
 				</article>
 			</div>
 		</section>
    <br>
    <!-- --------------- -->

    <!-- Aside-Bar -->
    <?php include('aside.php') ?>
    <!-- --------------- -->

    <!-- Footerr -->
    <?php include('main-footer.php') ?>
    <!-- --------------- -->


  </body>
</html>
