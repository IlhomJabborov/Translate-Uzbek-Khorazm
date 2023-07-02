<?php

$servername = "localhost";
$username = "//DB username yoki defoult 'root' turadi";
$password = "//DB parol";
$database= "//DB nomi";
try {
  $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
