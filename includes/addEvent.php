<?php
//Aqui agregamos la cita
require("funciones.php");

session_start();
verificarSesion();
// Conexion a la base de datos
$conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");

if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){
	
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];
	$idesp = $_SESSION['id'];
	$sql = "INSERT INTO events(title, start, end, color, id_especialista) values ('$title', '$start', '$end', '$color', '$idesp')";
	
	echo $sql;
	
	$query = $conexion->prepare( $sql );
	if ($query == false) {
	 print_r($conexion->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
