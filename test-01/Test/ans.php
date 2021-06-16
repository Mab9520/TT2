
<?php
session_start();
require("../../includes/funciones.php");
verificarSesion();
require("../../clases/Estudiante.php");


$usuario = Estudiante::usuarioPorId($_SESSION['id']);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel=StyleSheet href="../../css/style.css" type="text/CSS">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<style>
		img{
    		width: 15em; 
			height: 18em;
			margin: auto;
		}
	</style>
    <title>Resultados</title>
</head>
<body>
<div class="container encabezado">
    <div class="row">
        <div class="col-10 col-lg-10 text-center">
            <div class="">
                <h1>Bienvenido</h1>
            </div>
        </div>

        <div class="col-2 col-lg-2 text-center">
            <nav class="nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-bars"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../../views/principalEstudiante.php">Página principal</a></li>
                        <li><a class="dropdown-item" href="../../views/verEspecialistas.php">Especialistas</a></li>
                        <li><a class="dropdown-item" href="../test.php">Realizar test</a></li>
                        <li><a class="dropdown-item" href="../../views/editarDatosEstudiante.php">Editar datos</a></li>
                        <li><a class="dropdown-item" href="../../includes/logout.php">Cerrar sesion</a></li>
                    </ul>
                </li>
            </nav>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<div class="container">
	<div class="row">
		<div class="col-12 text-center">
				<?php 
		$conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");

		$id_estudiante = $_SESSION['id'];
		$pregunta1 = $_POST['Pregunta1'];
		$pregunta2 = $_POST['Pregunta2'];
		$pregunta3 = $_POST['Pregunta3'];
		$pregunta4 = $_POST['Pregunta4'];
		$pregunta5 = $_POST['Pregunta5'];
		$pregunta6 = $_POST['Pregunta6'];
		$pregunta7 = $_POST['Pregunta7'];
		$pregunta8 = $_POST['Pregunta8'];
		$pregunta9 = $_POST['Pregunta9'];
		$pregunta10 = $_POST['Pregunta10'];
		$pregunta11 = $_POST['Pregunta11'];
		$pregunta12 = $_POST['Pregunta12'];
		$pregunta13 = $_POST['Pregunta13'];
		$pregunta14 = $_POST['Pregunta14'];
		$pregunta15 = $_POST['Pregunta15'];
		$pregunta16 = $_POST['Pregunta16'];
		$pregunta17 = $_POST['Pregunta17'];
		$pregunta18 = $_POST['Pregunta18'];
		$pregunta19 = $_POST['Pregunta19'];
		$pregunta20 = $_POST['Pregunta20'];
		$pregunta21 = $_POST['Pregunta21'];
		
		$mensaje = "";
		
		$puntos = 0;

if($pregunta1 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta1 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta1 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta1 == "3")
	{
		$puntos = $puntos + 3;
	}
	
	if($pregunta2 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta2 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta2 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta2 == "3")
	{
		$puntos = $puntos + 3;
	}


	if($pregunta3 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta3 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta3 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta3 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta4 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta4 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta4 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta4 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta5 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta5 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta5 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta5 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta6 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta6 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta6 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta6 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta7 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta7 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta7 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta7 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta8 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta8 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta8 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta8 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta9 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta9 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta9 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta9 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta10 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta10 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta10 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta10 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta11 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta11 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta11 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta11 == "3")
	{
		$puntos = $puntos + 3;
	}


	if($pregunta12 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta12 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta12 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta12 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta13 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta13 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta13 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta13 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta14 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta14 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta14 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta14 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta15 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta15 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta15 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta15 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta16 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta16 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta16 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta16 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta17 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta17 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta17 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta17 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta18 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta18 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta18 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta18 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta19 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta19 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta19 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta19 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta20 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta20 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta20 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta20 == "3")
	{
		$puntos = $puntos + 3;
	}

	if($pregunta21 == "0")
	{
		$puntos = $puntos + 0;
	}
	if($pregunta21 == "1")
	{
		$puntos = $puntos + 1;
	}
	if($pregunta21 == "2")
	{
		$puntos = $puntos + 2;
	}
	if($pregunta21 == "3")
	{
		$puntos = $puntos + 3;
	}
	$consulta = $conexion->prepare("INSERT INTO datos (id_estudiante, pre1, pre2, pre3, pre4, pre5, pre6, pre7, pre8, pre9, pre10, pre11, pre12, pre13, pre14, pre15, pre16, pre17, pre18, pre19, pre20, pre21, puntos) VALUES(:id_estudiante, :pregunta1, :pregunta2, :pregunta3, :pregunta4, :pregunta5, :pregunta6, :pregunta7, :pregunta8, :pregunta9, :pregunta10, :pregunta11, :pregunta12, :pregunta13, :pregunta14, :pregunta15, :pregunta16, :pregunta17, :pregunta18, :pregunta19, :pregunta20, :pregunta21, :puntos)");


		$consulta->bindParam(':id_estudiante', $id_estudiante);
		$consulta->bindParam(':pregunta1', $pregunta1);
		$consulta->bindParam(':pregunta2', $pregunta2);
		$consulta->bindParam(':pregunta3', $pregunta3);
		$consulta->bindParam(':pregunta4', $pregunta4);
		$consulta->bindParam(':pregunta5', $pregunta5);
		$consulta->bindParam(':pregunta6', $pregunta6);
		$consulta->bindParam(':pregunta7', $pregunta7);
		$consulta->bindParam(':pregunta8', $pregunta8);
		$consulta->bindParam(':pregunta9', $pregunta9);
		$consulta->bindParam(':pregunta10', $pregunta10);
		$consulta->bindParam(':pregunta11', $pregunta11);
		$consulta->bindParam(':pregunta12', $pregunta12);
		$consulta->bindParam(':pregunta13', $pregunta13);
		$consulta->bindParam(':pregunta14', $pregunta14);
		$consulta->bindParam(':pregunta15', $pregunta15);
		$consulta->bindParam(':pregunta16', $pregunta16);
		$consulta->bindParam(':pregunta17', $pregunta17);
		$consulta->bindParam(':pregunta18', $pregunta18);
		$consulta->bindParam(':pregunta19', $pregunta19);
		$consulta->bindParam(':pregunta20', $pregunta20);
		$consulta->bindParam(':pregunta21', $pregunta21);
		$consulta->bindParam(':puntos', $puntos);


		if ($consulta->execute()){
			?>
    		<script>
        		Swal.fire({
            	title: 'Se han registrado sus respuestas correctamente',
            	icon: 'success',
            	confirmButtonText: 'Aceptar'
        		});
    		</script>
    	<?php
		}else{
			?>
    		<script>
        		Swal.fire({
            	title: 'No se han podido registrar las respuestas',
            	icon: 'error',
            	confirmButtonText: 'Aceptar'
        		}).then( () =>{
                location.href = "../principalEstudiante.php";
            });
    		</script>
    	<?php
		}


	if(($puntos == 0) || ($puntos <= 21))
	{
		?>
    		<script>
        		Swal.fire({
            	title: 'Tus niveles de ansiedad se encuentran en un rango normal.',
				text: 'No es necesario que requieras la ayuda de un profesional, sin embargo si lo deseas puedes solicitar un seguimiento si piensas que lo requieres',
            	icon: 'success',
            	confirmButtonText: 'Ver especialistas',
				cancelButtonText: 'Ver resultados',
				showCancelButton: true
        		}).then( (result) =>{
					if (result.isConfirmed) {
						location.href = "../../views/verEspecialistas.php";
                }
					
            });
    		</script>
    	<?php
		$mensaje="Ansiedad muy baja";
		$img= "<img src='https://1.bp.blogspot.com/-uVpCu7Ifrtk/YL_JSG9LOlI/AAAAAAAAM9w/sbjuD8eHS-kP6IF6_WBlCCM6W5C1PQ9tQCLcBGAsYHQ/s0/3.png'>";
		
		
	} else if (($puntos == 22) || ($puntos <= 35))
	{
		?>
    		<script>
        		Swal.fire({
            	title: 'Tu nivel de ansiedad se encuentra en un rango fuera de lo normal',
				text: 'Te recomendamos buscar la ayuda de un profesional, si lo deseas, pulsa en el botón para ver los especialistas o bien observa unicamente tu resultado',
            	icon: 'warning',
            	confirmButtonText: 'Ver especialistas',
				cancelButtonText: 'Ver resultados',
				showCancelButton: true
				}).then( (result) =>{
					if (result.isConfirmed) {
						location.href = "../../views/verEspecialistas.php";
                }
            });
    		</script>
    	<?php
		$mensaje="Ansiedad Moderada";
		$img= "<img src='https://1.bp.blogspot.com/-S2PvWDH9fiE/YL_JSOJW0eI/AAAAAAAAM94/NRMqmAcLiKok_FY51DOsxs_mB0X9lKhdQCLcBGAsYHQ/s0/2.png' border='0' width='150' height='600'>";
	} else if (($puntos == 36) || ($puntos <= 63))
	{
		?>
    		<script>
        		Swal.fire({
            	title: 'Tu nivel de ansiedad se encuentra en un rango fuera de lo normal',
				text: 'Te recomendamos buscar la ayuda de un profesional, si lo deseas, pulsa en el botón para ver los especialistas o bien observa unicamente tu resultado',
            	icon: 'warning',
            	confirmButtonText: 'Ver especialistas',
				cancelButtonText: 'Ver resultados',
				showCancelButton: true
			}).then( (result) =>{
					if (result.isConfirmed) {
						location.href = "../../views/verEspecialistas.php";
                }
            });
    		</script>

    	<?php
		$mensaje="Ansiedad Severa";
		$img= "<img src='https://1.bp.blogspot.com/-xo0qdE5kajk/YL_JSb0pISI/AAAAAAAAM90/JNoc7xTMvNYGsLjU0DHc51pG5F5P4_BXQCLcBGAsYHQ/s0/1.png'>";

	}
?>
	<h1><?php echo $_SESSION['Nombre']; ?></h1>
<?php
	echo "Te informamos que tu nivel de ansiedad se encuentra en un puntaje de $puntos puntos en un nivel de $mensaje de acuerdo a la catalogación de la ansiedad de Beck <br><br><br> $img ";
?>

		</div>
	</div>
</div>

</body>
</html>














