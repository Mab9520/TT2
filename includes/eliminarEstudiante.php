<?php

//Unicamente elimina la cuenta
session_start();

require('funciones.php');
require('../clases/Estudiante.php');
verificarSesion();
Estudiante::eliminarDatos($_SESSION['id']);
header('location: ../index.php');
?>