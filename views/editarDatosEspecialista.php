<?php
require("../includes/funciones.php");
require("../clases/Especialista.php");
require("headerEsp.php");
verificarSesion();

    $usuario = Especialista::usuarioPorId($_SESSION['id']);


?>

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
    <title>Editar mis datos</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h1>Editar mis datos</h1>
            </div>
        </div>
            <div class="col-12 col-lg-12">
                <img class="imgFondo" src="../images/psico.png" alt="">
                <div class="col-12 col-lg-12 encima text-center">
                    <form method = "post">
                        <p><input class = "form-control" type="text"  name = "nombre" value="<?php echo $usuario[0]['Nombre']; ?>" ></p>
                        <p><input class = "form-control" type="text"   name ="apellidos" value="<?php echo $usuario[0]['Apellidos']; ?>"></p>
                        <p> <input  class = "form-control" type="password" name = "pass" placeholder="Contraseña"/></p>
                        <p>Opcional:</p>
                        <p><input class = "form-control telefono" type="tel"  placeholder="Teléfono" name = "telefono"></p>
                        
                        <p><input class = "btn" type="submit" name="editar" value="Guardar cambios"></p>
                        <p><input class = "btn" type="submit" name="eliminar" value="Eliminar cuenta"></p>
                    
                        </form>    
                        
                        <?php if(!empty($error)): ?>
        <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
                </div> 
            </div>
        </div>
</body>
</html>
<?php
if(isset($_POST['editar'])){
    $pass=sha1($_POST['pass']);
    $datos = array(
        $_POST['nombre'],
        $_POST['apellidos'],
        $pass,
        $_POST['telefono']           
    );
        Especialista::editarDatos($_SESSION['id'], $datos);
        ?>
        <script>
            Swal.fire({
                title: 'Se han editado los datos!',
                icon: 'success',
                confirmButtonText: 'Ok'
            }).then( () =>{
                location.href = "editarDatosEspecialista.php";
            });
        </script>
        <?php
}else

if(isset($_POST['eliminar'])){?>
    <script>
        Swal.fire({
            title: '¿Deseas eliminar tu cuenta?',
            showCancelButton: true,
            icon: 'warning',
            text:'Si eliminas tu cuenta se perderá toda tu información',
            confirmButtonText: `Aceptar`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                location.href = "../includes/eliminarEspecialista.php";
            }
        })
    </script>
    <?php
} 

?>