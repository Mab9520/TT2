<?php

require("../views/headerEsp.php");
require("../includes/funciones.php");
verificarSesion();
require("../clases/Especialista.php");
require("../clases/Estudiante.php");
require("../clases/pacientes.php");

$usuario = Estudiante::usuarioPorId($_GET['id']);
//$conexion = conexion("root", "");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel=StyleSheet href="../css/style.css" type="text/CSS">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Respuestas del test</title>
</head>
<body>
<div class="col-12 encabezado">
	<a href="perfilEstudiantePrivado.php?id=<?php echo $usuario[0]['id'];?>"><i class="fas fa-arrow-alt-circle-left"></i></a>
</div> 
    
    <div class="container">
        <div class="row">
            <div class="col-12">
            <a href="../includes/reportepdf.php?id=<?php echo $usuario[0]['id'];?>"><input class="btn" type="button" value="Imprimir Reporte"></a>
                <?php 
                    Especialista::verTest();
                ?>
            </div>
        </div>
    </div>

</body>
</html>