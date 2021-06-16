<?php require('headerEsp.php');

require("../includes/funciones.php");
require("../clases/Especialista.php");
//require("../clases/Estudiante.php");
require("../clases/pacientes.php");
verificarSesion();
?>
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
    <title>Mis estudiantes</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Estudiantes con los que tiene seguimiento</h2>
            </div>
            <div class="col-12">
                <div class="col-12  lista">
                    <form action="" method = "POST">
                        <table>
                            <?php
                            require("../clases/Estudiante.php");
            
                            $paciente = pacientes::verPacientes($_SESSION['id']);
                            foreach($paciente as $row){?>
                                <tr>
                                    <ul>
                                        <td><li><a  href="?id=<?php echo $row['id']; ?> " ><?php echo $row['Nombre']; echo " ";echo $row['Apellidos'];?></a></li></td>
                                    </ul>            
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </form> 
                </div> 
                <div class="col-12">
                    <?php
                    if (isset($_GET['id'])) {
                 // Create the query
                    Especialista::verInfoEstudiantes();?>
                    

                    <?php    
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

