<?php
require("config.php");
$auth->logout();
header("Location:login.php");exit;

?>
