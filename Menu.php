<link href="css/MenuPrincipal.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">

<?php
	    error_reporting(0);
		$Nivel = $_GET['Nivel'];
		if($Nivel==0){
		echo ' <ul id="navegacion">';
		echo '<li><a href="Menu.php?Nivel=1">Alumnos</a></li>';
		echo '<li><a href="Menu.php?Nivel=2">Cursos</a></li>';
		echo '<li><a href="Menu.php?Nivel=4">Profesor</a></li>';
		echo '<li><a href="Menu.php?Nivel=3">Calificaciones</a></li>';
		echo '<li><a href="Menu.php?Nivel=5">Asistencia</a></li>';
		
		echo '</ul>';
		}
		if($Nivel==1){
		echo ' <ul id="navegacion">';
		echo '<li><a href="Menu.php?Nivel=0" class="last">Inicio</a></li>';
		echo '<li><a href="registraralumno.php" target="admin">Registrar Alumno</a></li>';
		echo '<li><a href="listaalumno.php" target="admin">Lista Alumnos</a></li>';
		
		echo '</ul>';
		}
		
		if($Nivel==2){
		echo ' <ul id="navegacion">';
		echo '<li><a href="Menu.php?Nivel=0" class="last">Inicio</a></li>';
		echo '<li><a href="nuevocurso.php" target="admin">Registrar Curso</a></li>';
		echo '<li><a href="listacurso.php" target="admin">Lista Curso</a></li>';
		
		echo '</ul>';
		}
		
		if($Nivel==3){
		echo ' <ul id="navegacion">';
		echo '<li><a href="Menu.php?Nivel=0" class="last">Inicio</a></li>';
		echo '<li><a href="nuevocalificacion.php" target="admin">Registrar Calificacion</a></li>';
		echo '<li><a href="listacalificaciones.php" target="admin">Calificaciones</a></li>';
		
		echo '</ul>';
		}

		if($Nivel==4){
			echo ' <ul id="navegacion">';
			echo '<li><a href="Menu.php?Nivel=0" class="last">Inicio</a></li>';
			echo '<li><a href="registrarprofesor.php" target="admin">Registrar profesor</a></li>';
			echo '<li><a href="listaprofesor.php" target="admin">Lista profesores</a></li>';
			
			echo '</ul>';
		}
		if($Nivel==5){
		echo ' <ul id="navegacion">';
		echo '<li><a href="Menu.php?Nivel=0" class="last">Inicio</a></li>';
		echo '<li><a href="asistencia.php" target="admin">Asistencia</a></li>';
		echo '<li><a href="verasistencia.php" target="admin">Ver Asistencias</a></li>';
		echo '</ul>';
		}

 ?>
