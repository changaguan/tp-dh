<?php

  $dsn = 'mysql:host=127.0.0.1; dbname=dh-ecommerce; port=8889; charset=utf8mb4';
  $user = 'root';
  $pass = 'root';
  $opt =  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

  try {
    $conn = new PDO($dsn, $user, $pass, $opt);
  } catch (PDOException $exception) {
    echo "El error de conexion es: ".$exception->getMessage();
  }
