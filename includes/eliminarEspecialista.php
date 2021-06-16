<?php

//Unicamente elimina la cuenta
session_start();

require('funciones.php');
require('../clases/Especialista.php');
verificarSesion();
Especialista::eliminarDatos($_SESSION['id']);
header('location: ../index.php');
?>