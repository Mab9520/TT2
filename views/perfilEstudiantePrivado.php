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
    <title>Perfil</title>   
</head>
<body>
    <div class="container d-flex align-items-center text-center justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-12">
                <p>Consulta el perfil del estudiante</p>
            </div>
        </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-12 text-center">
            <h1><?php echo $usuario[0]['Nombre']; echo " "; echo $usuario[0]['Apellidos'];?></h1>
            <p>Correo: <span><?php echo $usuario[0]['Correo']; ?></span>
            <p>Numero de telefono: <span><?php echo $usuario[0]['Telefono']; ?></span></h2>
            <p>Instituto: <span><?php echo $usuario[0]['Instituto']; ?></span></h2>
        </div>
        <div class="col-12 col-lg-6 text-center">
            <a href="../subir/subirActividadEsp.php?id=<?php echo $usuario[0]['id'];?>"><button class="btn">Subir actividades</button></a><br>
        </div>
        <div class="col-12 col-lg-6 text-center">
            <a href="seguimiento.php?id=<?php echo $usuario[0]['id'];?>"><button class="btn">Ver seguimiento</button></a>
        </div>
            
    </div>
        <!--Flip izquierda-->
        <div class="col-12 col-lg-6 ">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p>Resultados del test</p> 
                        <img src="../images/test.png" alt="Avatar" >
                    </div>
                    <div class="flip-card-back text-break">
                        <p>Visualizacion de los resultados del test</p>
                        <!--Aqui va el metodo para ver el resultado-->
                        <?php 
                        Especialista::verResultados();
              ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <!--Flip derecha-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class = "flip-card-front">
                        <p>Test de ansiedad</p>
                        <img src="../images/test.png" alt="Avatar">
                    </div>
                    <div class="flip-card-back">
                        <p>Visualizacion de las respuestas del test de ansiedad de Beck</p>
                        <!--Aqui va el metodo para ver el test-->
                        <a href="verTest.php?id=<?php echo $usuario[0]['id'];?>"><input class="btn" type="button" value="Ver test"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>       
</body>
</html>
