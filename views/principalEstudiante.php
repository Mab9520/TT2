<?php require('headerEstu.php');?>
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
    <title>Mi página principal</title>
</head>
<body>
<div class="container text-center">
    <div class="row">

        <div class="col-12 col-lg-6">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../images/test.png" alt="Avatar" >
                        <p>Realizar test</p>
                        <p>En esta sección puedes realizar el test para permitirnos calcular tus niveles de ansiedad</p>
                    </div>
                    <div class="flip-card-back">
                        <p>Realizar mi test de ansiedad</p>
                        <a href = '../test-01/test.php'"><img src="../images/testb.png" alt="test"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class = "flip-card-front">
                        <img src="../images/Actividades.png" alt="Avatar">
                        <p>Actividades</p>
                        <p>En esta sección puedes consultar las actividades  que el especialista haya cargado para ti</p>
                    </div>
                    <div class="flip-card-back">
                        <p>Ver mis actividades</p>
                        <a href = '../subir/ArchivosEstudiantes.php'"><img src="../images/actividadesb.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
