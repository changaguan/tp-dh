<?php
  require_once("models/user.php");
  include_once("models/db.php");
  include_once("models/auth.php");
  include_once("models/validator.php");

  $auth = new Auth();
  $validator = new Validator();
  $db = new DB();
