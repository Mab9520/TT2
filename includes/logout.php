<?php

//Unicamente cierra sesion, se usa en el header
session_start();

require('funciones.php');
require('../clases/Estudiante.php');
verificarSesion();
Estudiante::cerrarSesion();
header('location: ../index.php');
?>