<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require("../includes/funciones.php");
require("../clases/pacientes.php");
include('../clases/Estudiante.php');
session_start();
verificarSesion();
//Conexion a la base de datos
$usuario = Estudiante::usuarioPorId($_GET['id']);
$conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");

$tmp = array();
$res = array();
$id_estudiante = $_GET['id'];
$sel = $conexion->query("SELECT * FROM files WHERE id_Estudiante = '$id_estudiante'");//se seleccionan los archivos del id del estudiante
while ($row = $sel->fetch(PDO::FETCH_ASSOC)) {
    $tmp = $row;
    array_push($res, $tmp);
}

?>

<html>
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
    <title>Subir actividad</title>
    </head>
    <body>
    <div class="container encabezado">
    <div class="row">
        <div class="col-10 col-lg-10 text-center">
            <h1>Bienvenido</h1>
            <h2><?php echo $_SESSION['Nombre']; ?></h2>
        </div>
        <div class="col-2 col-lg-2 text-center">
        <nav class="nav">
        <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-bars"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../views/principalEspecialista.php">Página principal</a></li>
                <li><a class="dropdown-item" href="../views/verEstudiantes.php">Solicitudes</a></li>
                <li><a class="dropdown-item" href="../views/AgendaVista.php">Agenda</a></li>
                <li><a class="dropdown-item" href="../views/misEstudiantes.php">Mis estudiantes</a></li>
                <li><a class="dropdown-item" href="../views/editarDatosEspecialista.php">Editar datos</a></li>
                <li class="dropdown-item cerrarSesion"><a href="../includes/logout.php">Cerrar sesion</a></li>
            </ul>
          </li>
    </nav>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<div class="col-12 encabezado">
	<a href="../views/perfilEstudiantePrivado.php?id=<?php echo $usuario[0]['id'];?>"><i class="fas fa-arrow-alt-circle-left"></i></a>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Subir Archivos</h1>
        </div>
    </div>
</div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Nuevo
                    </button>

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
                                    <td><?php echo $val['fecha'] ?> </td>
                                    <td><?php echo $val['title'] ?></td>
                                    <td><?php echo $val['description'] ?></td>
                                    <td>
                                        <?php
                                            if(!empty($val['url'])){?>
                                                <button onclick="openModelPDF('<?php echo $val['url'] ?>')" class="btn btn-primary" type="button">Ver Archivo </button>
                                                <a class="btn btn-primary" target="_black" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/TT/subir/' . $val['url']; ?>" >Ver Archivo en otra página</a>
                                            <?php
                                            }

                                        ?>
                                       
                                        
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nueva actividad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" id="form1">
                        
                            <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Comentarios</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                            <div class="form-group">
                                <label for="description">Archivo:</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                            <div class="form-group">
                                <label for="description">Fecha</label>
                                <input class="form-control" name="fecha" value="<?php $fecha = date('Y-m-d'); echo $fecha;?>">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="onSubmitForm();">Guardar</button>
                       
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
                                            <?php 
                                            include ("../includes/mailActividad.php");
                                            ?>
                                            $('#exampleModal').modal('hide');
                                            

                                        } else {
                                            alert(msg);
                                        }

                                    }
                                };
                                xhttp.open("POST", "upload.php?id=<?php echo $_GET['id']; ?>", true);//usamos el direccionamiento para el metodo subir y obtenemos el id de la url
                                xhttp.send(data);
                                $('#form1').trigger('reset');
                            }
                            function openModelPDF(url) {
                                $('#modalPdf').modal('show');
                                $('#iframePDF').attr('src','<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/TT/subir/'; ?>'+url);
                            }
        </script>

    </body>
</html>

