<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header>
<div class="main-header">
  <div class="main-logo">
    <p><a href="index.php"><img class="logo" src="images/dh-logo.png" alt="logo" width="100px"></a></p>
  </div>

  <nav class="header-nav">
    <div class="hamburger-icon">
      <button type="button" name="button"><img src="images/hamburger-menu.jpg" alt="hamburger-menu" width="40px"></button>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light" style='background-color: #c84c4e;'>

      <button class="navbar-toggler icon-hamburger" type="button" data-toggle="collapse" data-target="#myNavBarPiola">
        <a class="navbar-brand" href="#"><span class="navbar-toggler-icon"></span></a>
      </button>

    <div class="collapse navbar-collapse" id="myNavBarPiola">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="novedades.php">Novedades</a></li>
          <li class="nav-item active"><a class="nav-link" href="ofertas.php">Ofertas</a></li>
          <li class="nav-item active"><a class="nav-link" href="hotSales.php">Hot Sale</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="myDropDown" data-toggle="dropdown">Tecnologia</a>
          <div class="dropdown-menu" aria-labelledby="myDropDown">
            <a class="dropdown-item" href="#">Camaras</a>
            <a class="dropdown-item" href="#">Celulares</a>
            <a class="dropdown-item" href="#">Gaming</a>
            <a class="dropdown-item" href="#">Informatica</a>
            <a class="dropdown-item" href="#">Tv</a>
          </div>
          </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="myDropDown" data-toggle="dropdown">Hogar</a>
          <div class="dropdown-menu" aria-labelledby="myDropDown">
            <a class="dropdown-item" href="#">Aires y Calefacciones</a>
            <a class="dropdown-item" href="#">Cocina</a>
            <a class="dropdown-item" href="#">Lavado</a>
            <a class="dropdown-item" href="#">Oficina</a>
          </div>
          </li>
      </ul>

      <div class="search-bar">
        <form class="form-inline searchForm" action="index.php" method="post">
          <input class="" type="search" placeholder="Search" aria-label="Search">
          <button class="" type="submit"><img src="images/icon-search.jpg" alt="iconSearch" width="20px"></button>
        </form>
      </div>

      <div class="collapse navbar-collapse" id="myNavBarPiola">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active micuenta"><a class="nav-link" href="login.php">Mi cuenta</a></li> <!-- validacion log-in (ir a perfil / log-in) -->
        </ul>
      </div>
      <!-- Button trigger modal -->
      <?php if($auth->estaLogueado()): ?>
        <button type="button" class="btn btn-primary ml-auto login" data-toggle="modal" data-target="#myModal"><a href="logout.php" style="color:white;">Log Out</a></button>
      <?php else: ?>
      <button type="button" class="btn btn-primary ml-auto login" data-toggle="modal" data-target="#myModal"><a href="login.php" style="color:white;">Log In</a></button>
      <button type="button" class="btn btn-primary ml-auto login" data-toggle="modal" data-target="#myModal"><a href="signup.php" style="color:white;">Sign Up</a></button>
    <?php endif; ?>
    </div>
    </nav>



    <div class="search-icon">
      <button type="button" name="button"><img src="images/icon-search.jpg" alt="search" width="40px"></button>
    </div>

    <!-- <div class="sesion">
      <ul>
        <li><a href="a.php">Iniciar sesión</a></li>
      </ul>
    </div> -->



















    
  </nav>











</div>


    </header>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
