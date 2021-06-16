<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Bienvenido</title>
</head>
<body>
<div class="container encabezado">
    <div class="row">
        <div class="col-10 col-lg-10 text-center">
            <div class="">
                <h1>Bienvenido</h1>
                <h2><?php echo $_SESSION['Nombre']; ?></h2>
            </div>
        </div>

        <div class="col-2 col-lg-2 text-center">
            <nav class="nav">
                <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-bars"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="principalEstudiante.php">Página principal</a></li>
                        <li><a class="dropdown-item" href="verEspecialistas.php">Especialistas</a></li>
                        <li><a class="dropdown-item" href="../test-01/test.php">Realizar test</a></li>
                        <li><a class="dropdown-item" href="editarDatosEstudiante.php">Editar datos</a></li>
                        <li><a class="dropdown-item" href="../includes/logout.php">Cerrar sesion</a></li>
                    </ul>
                </li>
            </nav>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
