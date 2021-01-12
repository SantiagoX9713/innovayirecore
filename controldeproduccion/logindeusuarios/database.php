<?php
$server   = 'localhost';
$username = 'basededatos';
$password = 'InnovaYire2021';
$database = 'innovacore';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
