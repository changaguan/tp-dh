<?php

$usuario = "";
$nombre = "";
$email = "";
$contrasena = "";
$repcontrasena = "";
$errorUsuario = "";
$errorNombre = "";
$errorEmail = "";
$errorContrasena = "";
$errorRepContrasena = "";
$errorAvatar = "";

if ($_POST) {

	$usuario = trim($_POST['userName']);
	$nombre = trim($_POST['userFirstName']);
	$email = trim($_POST['userEmail']);
	$contrasena = trim($_POST['userPassword']);
	$repcontrasena = trim($_POST['userRepeatPassword']);

	if(empty($usuario)) {
		$errorUsuario = "Debe elegir un nombre de usuario.<br>";
	}else if(strlen($usuario) < 4 || strlen($usuario) > 8) {
		$errorUsuario = "El usuario debe tener entre 4 y 8 caracteres.<br>";
	}

	if(empty($nombre)) {
		$errorNombre = "El nombre es necesario.<br>";
	}else if(strlen($nombre) < 4 || strlen($nombre) > 15) {
		$errorNombre = "El nombre debe tener entre 4 y 15 letras.<br>";
	}else if(!ctype_alpha($nombre)){
			$errorNombre = "El nombre sólo puede contener letras.";
	}

	if(empty($email)) {
		$errorEmail = "El email es obligatorio. <br>";
	}else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
		$errorEmail = "Formato de email inválido.";
	}

	if(empty($contrasena) || strlen($contrasena) < 4){
		$errorContrasena = "La contraseña debe tener más de 4 caracteres.";
	}

	if (empty($repcontrasena)) {
		$errorRepContrasena = "Este campo esta vacío.<br>";
	}

	if ($contrasena != $repcontrasena) {
		$errorRepContrasena = "Las contraseñas no coinciden.<br>";
	}

	/* if($_FILES['userAvatar']['error'] == UPLOAD_ERR_OK) {
		$desde = $_FILES['userAvatar']['tmp_name'];
		$archivo = uniqid();
		$ext = pathinfo($_FILES['userAvatar']['name'],PATHINFO_EXTENSION);
		if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg'){
			$hasta = "avatars/".$archivo.".".$ext;
			move_uploaded_file($desde,$hasta);
		}else{
			$errorImg = "Formato inválido de imagen.";
		}
	}else{
		$errorImg = "No se pudo cargar la imagen.";
	}
*/
	if (empty($errorUsuario) && empty($errorNombre) && empty($errorEmail) && empty($errorContrasena) &&empty($errorRepContrasena)) {
		header("location: exito.php"); exit;
	}

}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
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


					<h2 class= "row justify-content-center">Registrate!</h2>

						<br><br>

					<form action="signup.php" method="POST" enctype="multipart/form-data">

					<div class="form-group">
						<label for="">Nombre de usuario:</label>
						<input type="text" value="<?php echo $usuario; ?>" class="form-control" name="userName">
						<span style="color:red; font-size:12px;"> <?php echo $errorUsuario; ?> </span>
					</div>

					<div class="form-group">
						<label for="">Nombre:</label>
						<input type="text" value="<?php echo $nombre; ?>" class="form-control" name="userFirstName">
						<span style="color:red; font-size:12px;"> <?php echo $errorNombre; ?> </span>
					</div>

					<div class="form-group">
						<label for="">Correo electrónico:</label>
						<input type="email" value="<?php echo $email; ?>" class="form-control" name="userEmail" placeholder="user@email.com">
						<span style="color:red; font-size:12px;"> <?php echo $errorEmail; ?> </span>
					</div>

					<div class="form-group">
						<label for="">Contraseña:</label>
						<input type="password" class="form-control" name="userPassword">
						<span style="color:red; font-size:12px;"> <?php echo $errorContrasena; ?> </span>
					</div>

					<div class="form-group">
						<label for="">Repite contraseña:</label>
						<input type="password" class="form-control" name="userRepeatPassword">
						<span style="color:red; font-size:12px;"> <?php echo $errorRepContrasena; ?> </span>
						<br>
					</div>

						<div class="custom-file">
							<label for="">Imagen de perfil:
							<input type="file" class="custom-file-input" accept="image/jpeg" name="userAvatar">
						  <label class="custom-file-label" for="customFile">Elegir imagen</label>
							<span style="color:red; font-size:12px;"> <?php echo $errorAvatar; ?> </span>
							</label>
						</div>
						<br><br>

						<label>País de nacimiento:</label>
							<select name="userCountry" class="custom-select">
								<option>Argentina</option>
								<option>Bolivia</option>
								<option>Brasil</option>
								<option>Colombia</option>
								<option>Chile</option>
								<option>Ecuador</option>
								<option>Paraguay</option>
								<option>Perú</option>
								<option>Uruguay</option>
								<option>Venezuela</option>
							</select>

						<br><br><br>
						<div class="row justify-content-center">
						<button type="submit" class="btn btn-primary btn-lg">Registrarse</button>
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

    <!-- Header -->
    <?php include('main-footer.php') ?>
    <!-- --------------- -->


  </body>
</html>
