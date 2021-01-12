<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: ../../indexafter.php');
  }
  require 'database.php';

  if (!empty($_POST['nombre']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, nombre, password FROM usuarios WHERE nombre = :nombre');
    $records->bindParam(':nombre', $_POST['nombre']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: ../../indexafter.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Inicia Sesión</h1>
    <span>or <a href="signup.php">Regístrate</a></span>

    <form action="login.php" method="POST">
      <input name="nombre" type="text" placeholder="Ingresa tu nombre de usuario">
      <input name="password" type="password" placeholder="Contraseña">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
