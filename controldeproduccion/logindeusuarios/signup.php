<?php
session_start();
  require 'database.php';

  $message = '';

  if (!empty($_POST['nombre']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (nombre, password) VALUES (:nombre, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Regístrate</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registro de usuario</h1>
    <span><a href="login.php">Inicia Sesión</a></span>

    <form action="signup.php" method="POST">
      <input name="nombre" type="text" placeholder="Ingresa tu nombre de usuario">
      <input name="password" type="password" placeholder="Enter your Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <input type="submit" value="Registrar">
    </form>

  </body>
</html>