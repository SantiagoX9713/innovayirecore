<link href = "css/estilos.css" rel = "stylesheet" type = "text/css">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">
<?php
    error_reporting(0);
    $nivel = $_GET['nivel'];
    switch ($nivel) {
        case 0:
            echo '<ul id="navegacion">';
            echo '<li><a href="menu.php?nivel=1">Pedidos<a><li>';
            echo '<li><a href="menu.php?nivel=2">Cortadores<a><li>';
            echo '<li><a href="menu.php?nivel=3">Costureros<a><li>';
            echo '<li><a href="menu.php?nivel=4">Bordados<a><li>';
            echo '<li><a href="../controldeproduccion/logindeusuarios/logout.php">Salir</a></li>';
            echo '</ul>';
            break;
        case 1:
            echo '<ul id="navegacion">';
            echo '<li><a href="menu.php?nivel=0">Inicio<a><li>';
            echo '<li><a href="crearpedido.php" target="admin">Crear Pedido<a><li>';
            echo '<li><a href="listarpedidos.php" target="admin">Listar Pedidos<a><li>';
            echo '<li><a href="rastrearpedidos.php" target="admin">Rastrear Pedidos<a><li>';
            echo '</ul>';
            break;
        case 2:
            echo '<ul id="navegacion">';
            echo '<li><a href></li>';    
    }
?>
