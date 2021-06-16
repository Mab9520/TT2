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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Iniciar sesión</title>
</head>
<body>
    <div class="container encabezado">
        <div class="row">
           <div class="col-12">
            <a href="../index.php"><i class="fas fa-arrow-alt-circle-left"></i></a>
            </div> 
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            
            <div class="col-12">
                <img id="degradado" src="../images/ini.png" alt="">
                <h2 class="texto-encima text-center">Iniciar Sesión</h2>
            </div>
            <div class="col-12 text-center">
                <form class="col-12 " method="POST" action="../includes/login.php">
                    <div class="col-12 d-flex justify-content-center ">
                        <p><input placeholder="Correo electrónico" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"></p>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <p><input placeholder="Contraseña" type="password" class="form-control" id="exampleInputPassword1" name="pass"></p>
                    </div>
                        <p><a href="./restablecer.php">Olvidé mi contraseña</a></p>
                        <p><button type="submit" class="btn">Iniciar sesion</button></p>
                </form>
            </div> 
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>