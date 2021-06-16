<?php
//Edicion y eliminacion de las citas
// Conexion a la base de datos
session_start();
require("funciones.php");
verificarSesion();
//require("views/headerEsp.php");

$conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
if (isset($_POST['delete']) && isset($_POST['id'])){
	//Elimina la cita
	
	$id = $_POST['id'];
	
	$sql = "DELETE FROM events WHERE id = $id";
	$query = $conexion->prepare( $sql );
	if ($query == false) {
	 print_r($conexion->errorInfo());
	 die ('Erreur prepare');
	}
	$res = $query->execute();
	if ($res == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}
	
}elseif (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['id'])){
	//Edita el titulo de la cita
	$id = $_POST['id'];
	$title = $_POST['title'];
	$color = $_POST['color'];
	
	$sql = "UPDATE events SET  title = '$title', color = '$color' WHERE id = $id ";

	
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
header('Location: ../views/AgendaVista.php');

	
?>
