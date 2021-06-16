<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel=StyleSheet href="../css/style.css" type="text/CSS">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
           <div class="col-12 text-center">
    <?php

    //Se hace la verifiacion del codigo que se manda al correo
    include ("funciones.php");
    $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
    $email =$_POST['email'];
    $codigo =$_POST['codigo'];

        $res = $conexion->query("select * from estudiante 
        where correo='$email' 
        and codigo='$codigo' 
        ");
        $mostrar= $res->fetch()
?>      
<?php
        $res1 = $conexion->query("select * from especialista 
        where correo='$email' 
        and codigo='$codigo' 
        ");
        $mostrar1= $res1->fetch()
?>
<?php 
    if( $mostrar['rol_id'] == 2){
        $conexion->query("update estudiante set confirmado = 'si' where correo = '$email' ");
        echo "TODO CORRECTO  <br><br> Ya puedes <a href= ../views/login.views.php >Iniciar sesion </a>";
    }elseif ($mostrar1['rol_id'] == 1) {
        $conexion->query("update especialista set confirmado = 'si' where correo = '$email' ");
        echo "TODO CORRECTO  <br><br> Ya puedes <a href= ../views/login.views.php >Iniciar sesion </a>";
    }else{
        echo "codigo invalido";
    }
?>
    </div> 
        </div>
    </div>
    
</body>
</html>