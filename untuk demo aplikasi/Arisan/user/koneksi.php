<?php
try {
  $host     = 'localhost';
  $dbname   = 'arisankita';
  $user     = 'root';
  $password = '';

  $conn = new PDO("mysql:host=$host;dbname=$dbname","$user","$password");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {

  echo $e->getMessage();
  die();
}
?>
