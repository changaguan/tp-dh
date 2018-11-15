<?php require_once("config.php");
if ($auth->estaLogueado()) {
  $user = $db->traerPorMail($_SESSION["logueado"]);
}
 ?>
