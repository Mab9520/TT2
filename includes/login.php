<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
   <?php
    session_start();
    require("funciones.php");

    $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
//Aqui hacemos la consulta a la tabla estudiante para asegurarnos que el correo sea el mismo que registro con esa contraseña
    $email =$_POST['email'];
    $password =sha1($_POST['pass']);

    $res = $conexion->query("select * from estudiante 
        where correo ='$email' and 
        contraseña ='$password'  and 
        confirmado = 'si'
        ");
    $mostrar = $res->fetch()
?>
<?php

//Aqui hacemos la consulta a la tabla especialisra para asegurarnos que el correo sea el mismo que registro con esa contraseña
    $res1 = $conexion->query("select * from especialista 
        where correo ='$email' and 
        contraseña ='$password'  and 
        confirmado = 'si'
        ");
    $mostrar1 = $res1->fetch()
?>
<?php

//Verificamos los roles de usuario del registro
    if ($mostrar['rol_id'] == 2) {
        $_SESSION['id'] = $mostrar['id'];;
        $_SESSION['Nombre'] = $mostrar['Nombre'];
        header("location: http://localhost/TT/views/principalEstudiante.php");
    }elseif ($mostrar1['rol_id'] == 1) {
        $_SESSION['id'] = $mostrar1['Cedula'];
        $_SESSION['Nombre'] = $mostrar1['Nombre'];
        header("location: http://localhost/TT/views/principalEspecialista.php");
    }else {
        ?>
        <script>
            Swal.fire({
                title: 'Usuario o contraseña incorrectos!',
                icon: 'error',
                confirmButtonText: 'Ok'
            }).then( () =>{
                location.href = "../views/login.views.php";
            });
        </script>
        <?php
    }
    
?> 
</body>
</html>
