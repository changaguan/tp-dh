<nav class="navbar navbar-expand-lg navbar-light" style='background-color: #c84c4e;'>
  <a class="navbar-brand" href="index.php"><img class="logo" src="images/dh-logo.png" alt="logo" width="75px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"><a class="nav-link" href="novedades.php">Novedades</a></li>
      <li class="nav-item"><a class="nav-link" href="ofertas.php">Ofertas</a></li>
      <li class="nav-item"><a class="nav-link" href="hotSales.php">Hot Sale</a></li>
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tecnologia</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Camaras</a>
          <a class="dropdown-item" href="#">Celulares</a>
          <a class="dropdown-item" href="#">Gaming</a>
          <a class="dropdown-item" href="#">Informatica</a>
          <a class="dropdown-item" href="#">Tv</a>
        </div>
      </li>
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="myDropDown" data-toggle="dropdown">Hogar</a>
        <div class="dropdown-menu" aria-labelledby="myDropDown">
          <a class="dropdown-item" href="#">Aires y Calefacciones</a>
          <a class="dropdown-item" href="#">Cocina</a>
          <a class="dropdown-item" href="#">Lavado</a>
          <a class="dropdown-item" href="#">Oficina</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search" style='border-top-right-radius: 0px;border-bottom-right-radius: 0px;border-top-left-radius: 5px;border-bottom-left-radius: 5px;'>
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" style='border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;'><img src="images/icon-search.jpg" alt="iconSearch" width="20px"></button>
    </form>

    <div class="class="d-flex justify-content-end"">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="myDropDown" data-toggle="dropdown">Mi Cuenta <img src="<?php if($auth->estaLogueado()):?><?php else: ?>images/default-profile.jpg<?php endif; ?>" width="35px"></a>
          <div class="dropdown-menu" aria-labelledby="myDropDown">
            <?php if($auth->estaLogueado()): ?>
              <a class="dropdown-item" href="profile.php?username=">Mi perfil</a>
              <a class="dropdown-item" href="settings.php">Configuraciones</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Log Out</a>
            <?php else: ?>
              <a class="dropdown-item" href="login.php">Log In</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="signup.php">Sign Up</a>
            <?php endif; ?>
          </div>
        </ul>
      </div>
  </div>
</nav>

<!-- DIVIDER -->
<!-- <div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">divider</a>
</div> -->
