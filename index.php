<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel=StyleSheet href="css/style.css" type="text/CSS">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Herramienta de apoyo al psicólogo</title>
</head>
<body>
    <div class="container encabezado">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Bienvenido</h1>
                <h2>Herramienta de apoyo al psicólogo en la evaluación de la ansiedad en jóvenes universitarios</h2>
            </div>
        </div>
    </div>
<div class="container d-flex align-items-center justify-content-center">
    <div class="row text-center">
        
        <div class="col-12 col-lg-12">
            <a href="views/login.views.php"><input class="btn" type="submit" value="Iniciar sesión" name="iniciaSesion"></a>
        </div>
        <div class="col-12 col-lg-6">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p>Estudiante</p> 
                        <p>¿Ya estás registrado?</p> 
                        <p>Inicia sesión en la herramienta</p>
                        <img src="images/est.png" alt="Avatar" >
                    </div>
                    <div class="flip-card-back">
                        <p>Registrate como estudiante para realizar tu test  de nivel  de ansiedad</p>
                        <a href = 'views/RegEstudiante.php'"><img src="images/registro.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class = "flip-card-front">
                        <p>Especialista</p>
                        <p>¿Ya estás registrado? </p>
                        <p>Inicia sesión en la herramienta</p>
                        <img src="images/psico.png" alt="Avatar">
                    </div>
                    <div class="flip-card-back">
                        <p>Registrate como especialista con tu cedula profesional</p>
                        <a href = 'views/RegEspecialista.php'"><img src="images/registro.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
