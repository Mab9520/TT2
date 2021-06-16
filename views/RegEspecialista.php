<!DOCTYPE html>
<html lang="es">
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
    <title>Registro especialista</title>
</head>
<body>
    <div class="container encabezado">
        <div class="row">
            <div class="col-12 col-lg-12">
                <a href="../index.php"><i class="fas fa-arrow-alt-circle-left"></i></a>
            </div>
            <div class="col-12 text-center col-lg-12">
                <h2>Registrate como especialista</h2>
            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="col-12 col-lg-12">
            <img class="imgFondo" src="../images/psico.png" alt="">
            <div class="col-12 col-lg-12 encima2">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "POST" >
                    <p></p><input class = "form-control" type="text"  placeholder="Nombre" name = "nombre"></p>
                    <p><input class = "form-control" type="text"  placeholder="Apellidos" name = "apellidos"></p>
                    <p><input class = "form-control" type="email"  placeholder="Correo Electronico" name = "correo"></p>
                    <p> <input class = "form-control" type="password"  placeholder="Contraseña" name = "pass"></p>
                    <p>Verifica tu contraseña</p>
                    <p> <input class = "form-control" type="password"  placeholder="Contraseña" name = "pass2"></p>
                    <p> <input class = "form-control" type="number"  placeholder="Cedula profesional" name = "cedula"></p>
                    <p> <input class = "form-control" type="text"  placeholder="Especialidad" name = "especialidad"></p>
                    <p> <input class = "form-control type="text"  placeholder="Sexo M/F" name = "sexo"></p>
                    <p>Opcional:</p>
                    <p><input class = "form-control telefono" type="tel"  placeholder="Teléfono" name = "telefono"></p>
                    <p><input class = "btn" type="submit" value="Registrar" name = "registrar"></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
</html>

<?php

require("../includes/funciones.php");
require("../clases/Especialista.php");
$error = "";
if(isset($_POST['registrar'])){
    $pass=sha1($_POST['pass']);
    $correo = $_POST['correo'];
    $confirmado = 'no';
    include "../includes/mail.php";
    $codigo = $codigoran;

    $datos = array(
        $_POST['nombre'],
        $_POST['apellidos'],
        $correo,
        $pass,
        $_POST['cedula'],
        $_POST['especialidad'],
        $_POST['sexo'],
        $_POST['telefono'],
        $confirmado,
        $codigo
    );

    if(empty($_POST['nombre']) || empty($_POST['apellidos'])  || empty($_POST['correo']) || empty($_POST['pass']) || empty($_POST['cedula']) || empty($_POST['especialidad']) || empty($_POST['sexo'])){
        ?> 
        <script>swal("Completa los campos");</script>
    <?php
    } else{
        $datos = limpiarEsp($datos);
            if(empty(Especialista::verificarVacio($datos[4]))){
                if($_POST['pass'] == $_POST['pass2'] ){
                    Especialista::registrar($datos);
                } else {
                    ?>
                <script>
                    Swal.fire({
                    title: 'Las contraseñas no coinciden',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                    });
                </script>
                <?php
                } 
            }
            else{?>
                <script>
                    Swal.fire({
                    title: 'Este usuario ya existe',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                    });
                </script>
                <?php
            }
    }
    
}
?>