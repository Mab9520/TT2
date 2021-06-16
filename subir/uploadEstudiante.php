<?php
 // funcion para completar la actividad subiendo un archivo 
require("../includes/funciones.php");
session_start();
verificarSesion();

$id = $_SESSION['id'];
$idActividad = $_GET['id'];
$conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $fecha = date('Y-m-d');
    
    $file_name = $_FILES['file']['name'];

    $new_name_file = null;

    if ($file_name != '' || $file_name != null) {
        
        $file_type = $_FILES['file']['type'];
        list($type, $extension) = explode('/', $file_type);
        if ($extension == 'pdf') {
            
            $dir = 'filesEst/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $file_tmp_name = $_FILES['file']['tmp_name'];
            //$new_name_file = 'files/' . date('Ymdhis') . '.' . $extension;
            $new_name_file = $dir . file_name($file_name) . '.' . $extension;
            if (copy($file_tmp_name, $new_name_file)) {
                 
            } 
        }
    }

    $completada = $conexion->prepare("UPDATE files SET status = 1 WHERE id = '$idActividad' ");
    $completada->execute();
    $ins = $conexion->query("INSERT INTO filesest (title, description, url, id_fileEspecialista, id_Estudiante, fecha) VALUES ('$title','$description','$new_name_file','$idActividad','$id','$fecha')");

    

    if ($ins) {
        echo 'success';
    } else {
        echo 'fail';
    }
} else {
    echo 'fail';
}
