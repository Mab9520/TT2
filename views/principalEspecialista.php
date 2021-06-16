<?php require('headerEsp.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel=StyleSheet href="../css/style.css" type="text/CSS">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <title>Mi pagina principal</title>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../images/est.png" alt="Ver estudiantes" >
                            <p>Estudiantes</p>
                            <p>En esta sección usted podrá ver a los estudiantes que ha aceptado para su seguimiento</p>
                        </div>
                        <div class="flip-card-back">
                            <p>Consultar estudiantes</p>
                            <a href = '../views/misEstudiantes.php'><img src="../images/testb.png" alt="test"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class = "flip-card-front">
                            <img src="https://1.bp.blogspot.com/-XFX3gD0gC0c/YL_JSuwqemI/AAAAAAAAM98/kWoyIv5unCwqeS7tqqxYkWjpQmKe9HtigCLcBGAsYHQ/s0/4.png" alt="Ver agenda">
                            <p>Agenda</p>
                            <p>En esta sección usted podrá consultar su agenda de citas, editarlas o crear nuevas citas para sus estudiantes</p>
                        </div>
                        <div class="flip-card-back">
                            <p>Consultar agenda</p>
                            <a href = 'AgendaVista.php'><img src="https://1.bp.blogspot.com/-XFX3gD0gC0c/YL_JSuwqemI/AAAAAAAAM98/kWoyIv5unCwqeS7tqqxYkWjpQmKe9HtigCLcBGAsYHQ/s0/4.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</body>
</html>
