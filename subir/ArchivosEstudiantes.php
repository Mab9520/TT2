<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require("../includes/funciones.php");
require("../clases/pacientes.php");
session_start();
verificarSesion();

//Conexion a la base de datos
$conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");


$tmp = array();
$res = array();
$fecha = date('Y-m-d');
$id_estudiante = $_SESSION['id'];
$sel = $conexion->query("SELECT * FROM files WHERE id_estudiante = '$id_estudiante'");
while ($row = $sel->fetch(PDO::FETCH_ASSOC)) {
    $tmp = $row;
    array_push($res, $tmp);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <title>Mis actividades</title>
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
                        <li><a class="dropdown-item" href="../views/principalEstudiante.php">Página principal</a></li>
                        <li><a class="dropdown-item" href="../views/verEspecialistas.php">Especialistas</a></li>
                        <li><a class="dropdown-item" href="../test-01/test.php">Realizar test</a></li>
                        <li><a class="dropdown-item" href="../views/editarDatosEstudiante.php">Editar datos</a></li>
                        <li><a class="dropdown-item" href="../includes/logout.php">Cerrar sesion</a></li>
                    </ul>
                </li>
            </nav>
        </div>
    </div>
</div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Mis actividades</h1>
                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <table class="table informacion mt-2">
                        <thead>
                            <tr>
                                <th scope="col">Fecha de subida</th>
                                <th scope="col">Actividad</th>
                                <th scope="col">Comentarios adicionales</th>
                                <th scope="col">Visualizar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($res as $val) { ?>
                                <tr>
                                    <td><?php echo $val['fecha'] ?></td>
                                    <td><?php echo $val['title'] ?></td>
                                    <td><?php echo $val['description'] ?></td>
                                    <td>
                                    <?php
                                        if(!empty($val['url'])){?>
                                        <button onclick="openModelPDF('<?php echo $val['url'] ?>')" class="btn btn-primary" type="button">Ver Archivo </button>
                                        <a href="?id=<?php echo $val['id']?>#exampleModal"><button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Completar actividad
                                        </button></a>
                                        <?php
                                            }

                                        ?>
                                        
                                        <!-- <a class="btn btn-primary" target="_black" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/uploadfile/' . $val['url']; ?>" >Ver Archivo en otra página</a> -->
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        
        
        <!-- Modal para subir archivo-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Completar actividad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" id="form1">
                            <div class="form-group">
                                <label for="title">Actividad</label>
                                
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Comentarios</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                            <div class="form-group">
                                <label for="description">Subir evidencia*</label>
                                <input type="file" class="form-control" id="file" name="file">
                                
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="onSubmitForm()"> Completar actividad</button>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalPdf" tabindex="-1" aria-labelledby="modalPdf" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ver archivo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script>
                            function onSubmitForm() {
                                var frm = document.getElementById('form1');
                                var data = new FormData(frm);
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function () {
                                    if (this.readyState == 4) {
                                        var msg = xhttp.responseText;
                                        if (msg == 'success') {
                                            alert(msg);
                                            $('#exampleModal').modal('hide')
                                        } else {
                                            alert(msg);
                                        }

                                    }
                                };
                                xhttp.open("POST", "uploadEstudiante.php?id=<?php echo $_GET['id'] ?>", true);
                                xhttp.send(data);
                                $('#form1').trigger('reset');
                            }
                            function openModelPDF(url) {
                                $('#modalPdf').modal('show');
                                $('#iframePDF').attr('src','<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/TT/subir/'; ?>'+url);
                            }
        </script>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</html>
