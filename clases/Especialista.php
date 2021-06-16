<?php
class Especialista {

    public static function registrar($datos){//registra el usuario   
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");

        $correo = $_POST['correo'];
        $consulta = $conexion->prepare("INSERT INTO especialista (Nombre, Apellidos, Correo, Contraseña, Cedula, Especialidad, Sexo, Telefono, rol_id, confirmado , codigo) VALUES (:nombre, :apellidos, :correo, :pass, :cedula, :especialidad, :sexo, :telefono, 1, :confirmado, :codigo)");
        if ($consulta->execute(array(
            ':nombre'=> $datos[0],
            ':apellidos'=> $datos[1],
            ':correo' => $datos[2],
            ':pass' => $datos[3],
            ':cedula' => $datos[4],
            ':especialidad' =>$datos[5],
            ':sexo' => $datos[6],
            ':telefono' => $datos[7],
            ':confirmado' => $datos[8],
            ':codigo' => $datos[9]
        ))) {//si se registra correctamente se muestra este mensaje
            ?>
        <script>
            Swal.fire({
                title: 'Se han registrado los datos correctamente',
                text: 'Te hemos enviado un código de verificación, revisa tu correo',
                icon: 'success',
                confirmButtonText: 'Ok'
            });
        </script>
        <?php
        } else{
            //si hay error muestra este mensaje
            ?>
        <script>
            Swal.fire({
                title: 'Ha ocurrido un error en su registro, inténtelo nuevamente',
                icon: 'success',
                confirmButtonText: 'Ok'
            });
        </script>
        <?php
        }
    }
    public static function verificar($correo){  //verifica que el usuario no exista en la base de datos mediante el correo
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");

        $consulta = $conexion->prepare("SELECT * FROM especialista WHERE Correo = :correo");
        $consulta->execute(array(
            ':correo' => $correo
    ));
        $resultado = $consulta->fetchAll();
        return $resultado;
    }

    public static function verificarVacio($cedula){  //verifica que el usuario no exista mediante la cedula
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");

        $consulta = $conexion->prepare("SELECT * FROM especialista WHERE Cedula = :cedula");
        $consulta->execute(array(
            ':cedula' => $cedula
    ));
        $resultado = $consulta->fetchAll();
        return $resultado;
    }

    public static function verEstudiantes(){ //Muestra los estudiantes que han enviado solicitud al especialista
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");

        $sql= "SELECT * FROM estudiante";
        $execute = $conexion->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;           
    }


    public static function verInfoEstudiantes(){//Muestra la información de los estudiantes en una tabla
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
        $result ='';
        $row = null;
        $sql = "SELECT * FROM estudiante WHERE id =?";
        $execute = $conexion->prepare($sql);
        $results = $execute->execute(array($_GET['id']));
        $row = $execute->fetch();
        ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <table class="informacion">
                        <thead><th colspan="2"><?php echo $row['Nombre']; echo " "; echo $row['Apellidos']?></th></thead>
                        <tr><td>Correo</td>
                        <td><?php echo $row['Correo'];?></td></tr>
                        <tr><td>Numero de telefono</td>
                        <td><?php echo $row['Telefono'];?></td></tr>
                        <tr><td>Instituto</td>
                        <td><?php echo $row['Instituto'];?></td></tr>
                        <tr><td colspan="2"><a href = "perfilEstudiantePrivado.php?id=<?php echo $row['id'] ?>"><input class="btn" type="submit" value="Ver Perfil"></a></td></tr>
                    <tr><td colspan="2"><a onclick= "location.href = 'AgendaVista.php'"><input class="btn" type="submit" value="Agendar cita"></a></td></tr>
                    </table> 
                </div>
            </div>
        </div>
        
    <?php   
}

public static function verTest(){//Muestra el test del estudiante
    $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
    $result= $conexion->query("SELECT * from datos");

    $mostrar= $result->fetch();
     ?>

    <br>
    <table class="informacion">
        <tr>
        <td>1.- Torpe o entumecido.</td>
        <td><?php if ($mostrar['pre1'] == 0){
            echo "No";
        }elseif ($mostrar['pre1'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre1'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre1'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>2.- Acalorado.</td>
        <td><?php if ($mostrar['pre2'] == 0){
            echo "No";
        }elseif ($mostrar['pre2'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre2'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre2'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>3.- Con temblor en las piernas.</td>
        <td><?php if ($mostrar['pre3'] == 0){
            echo "No";
        }elseif ($mostrar['pre3'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre3'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre3'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>4.- Incapaz de relajarse.</td>
        <td><?php if ($mostrar['pre4'] == 0){
            echo "No";
        }elseif ($mostrar['pre4'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre4'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre4'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>5.- Con temor a que ocurra lo peor.</td>
        <td><?php if ($mostrar['pre5'] == 0){
            echo "No";
        }elseif ($mostrar['pre5'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre5'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre5'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>6.- Mareado, o que se le va la cabeza.</td>
        <td><?php if ($mostrar['pre6'] == 0){
            echo "No";
        }elseif ($mostrar['pre6'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre6'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre6'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>7.- Con latidos del corazón fuertes y acelerados.</td>
        <td><?php if ($mostrar['pre7'] == 0){
            echo "No";
        }elseif ($mostrar['pre7'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre7'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre7'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>8.- Inestable.</td>
        <td><?php if ($mostrar['pre8'] == 0){
            echo "No";
        }elseif ($mostrar['pre8'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre8'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre8'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>9.- Atemorizado o asustado.</td>
        <td><?php if ($mostrar['pre9'] == 0){
            echo "No";
        }elseif ($mostrar['pre9'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre9'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre9'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>10.- Nervioso.</td>
        <td><?php if ($mostrar['pre10'] == 0){
            echo "No";
        }elseif ($mostrar['pre10'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre10'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre10'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>

        <tr>
        <td>11.- Con sensación de bloqueo.</td>
        <td><?php if ($mostrar['pre11'] == 0){
            echo "No";
        }elseif ($mostrar['pre11'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre11'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre11'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>12.- Con temblores en las manos.</td>
        <td><?php if ($mostrar['pre12'] == 0){
            echo "No";
        }elseif ($mostrar['pre12'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre12'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre12'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>13.- Inquieto, inseguro.</td>
        <td><?php if ($mostrar['pre13'] == 0){
            echo "No";
        }elseif ($mostrar['pre13'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre13'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre13'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>14.- Con miedo a perder el control.</td>
        <td><?php if ($mostrar['pre14'] == 0){
            echo "No";
        }elseif ($mostrar['pre14'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre14'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre14'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>15.- Con sensación de ahogo.</td>
        <td><?php if ($mostrar['pre15'] == 0){
            echo "No";
        }elseif ($mostrar['pre15'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre15'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre15'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>16.- Con temor a morir.</td>
        <td><?php if ($mostrar['pre16'] == 0){
            echo "No";
        }elseif ($mostrar['pre16'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre16'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre16'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>17.- Con miedo.</td>
        <td><?php if ($mostrar['pre17'] == 0){
            echo "No";
        }elseif ($mostrar['pre17'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre17'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre17'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>18.- Con problemas digestivos.</td>
        <td><?php if ($mostrar['pre18'] == 0){
            echo "No";
        }elseif ($mostrar['pre18'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre18'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre18'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>19.- Con desvanecimientos.</td>
        <td><?php if ($mostrar['pre19'] == 0){
            echo "No";
        }elseif ($mostrar['pre19'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre19'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre19'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>20.- Con rubor facial.</td>
        <td><?php if ($mostrar['pre20'] == 0){
            echo "No";
        }elseif ($mostrar['pre20'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre20'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre20'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        <tr>
        <td>21.- Con sudores, fríos o calientes.</td>
        <td><?php if ($mostrar['pre21'] == 0){
            echo "No";
        }elseif ($mostrar['pre21'] == 1) {
            echo "Leve";
        }elseif ($mostrar['pre21'] == 2) {
            echo "Moderado";
        }elseif ($mostrar['pre21'] == 3) {
            echo "Bastante";
        }

        ?></td>
        </tr>
        
        </table><?php
}
	
public static function verResultados(){//Muestra los resultados del test y los cheems
    $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
    $id_estudiante = $_GET['id'];
    $result= $conexion->query("SELECT * from datos WHERE id_estudiante = '$id_estudiante'");
    $mostrar= $result->fetch();

if ($mostrar['id_estudiante'] == "") {
    echo "No se ha realizado aun el Test";
}else { 
    $puntos = $mostrar['puntos'];
    if(($puntos == 0) || ($puntos <= 21))
{
    $mensaje="Ansiedad muy baja";
    $img= "<img src='https://1.bp.blogspot.com/-uVpCu7Ifrtk/YL_JSG9LOlI/AAAAAAAAM9w/sbjuD8eHS-kP6IF6_WBlCCM6W5C1PQ9tQCLcBGAsYHQ/s0/3.png' border='0' width='300' height='300'>";
    
} else if (($puntos == 4) || ($puntos <= 35))
{
    $mensaje="Ansiedad Moderada";
    $img= "<img src='https://1.bp.blogspot.com/-S2PvWDH9fiE/YL_JSOJW0eI/AAAAAAAAM94/NRMqmAcLiKok_FY51DOsxs_mB0X9lKhdQCLcBGAsYHQ/s0/2.png' border='0' width='300' height='300'>";
} else if (($puntos == 8) || ($puntos <= 63))
{
    $mensaje="Ansiedad Severa";
    
    $img= "<img src='https://1.bp.blogspot.com/-xo0qdE5kajk/YL_JSb0pISI/AAAAAAAAM90/JNoc7xTMvNYGsLjU0DHc51pG5F5P4_BXQCLcBGAsYHQ/s0/1.png' border='0' width='300' height='300'>";
}
echo "Resultado: $puntos puntos <br> $mensaje <br><br><br> $img ";
}
}

    

    public static function usuarioPorId($id){ //busca el especialista mediante el id que jalamos de la url con un get
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");

        $consulta = $conexion->prepare("SELECT * FROM especialista WHERE Cedula = :cedula");
        $consulta->execute(array(':cedula' => $id));
        $resultado = $consulta->fetchAll();
        return $resultado;
    }
    public static function editarDatos($id, $datos){// Edita los datos 
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");

        $consulta = $conexion->prepare("UPDATE especialista SET Nombre = :nombre, Apellidos = :apellidos, Contraseña = :pass, Telefono = :telefono WHERE Cedula = :cedula");
        if($consulta->execute(array(
            ':nombre'=> $datos[0],
            ':apellidos'=> $datos[1],
            ':pass' => $datos[2],
            ':telefono' => $datos[3],
            ':cedula' =>$id
        ))){
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
    } else{
        ?>
            <script>
        		Swal.fire({
            	title: 'No se han podido actualizar los datos, inténtelo nuevamente',
            	icon: 'error',
            	confirmButtonText: 'Aceptar'
        		});
    		</script>
            <?php
        }
    }

    public static function eliminarDatos($cedula){//Elimina la cuenta del usuario
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
        $consulta = $conexion->prepare("DELETE  FROM especialista WHERE Cedula = :cedula");
        $consulta->execute(array(
            ':cedula' =>$cedula
        ));
        
    }
    public static function closeSession(){ //Cierra y destruye la sesion
        session_unset();
        session_destroy();
        
    }

    function seleccionarPaciente(){ //Creo que este no sirve xD
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");

        $sql= "SELECT * FROM estudiante";
        $execute = $conexion->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request; 
    }

    function verSeguimiento(){//Creo que este tampoco sirve :v
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
        
        $result ='';
        $row = null;
        $sql = "SELECT * FROM";
        $execute = $conexion->prepare($sql);
        $results = $execute->execute(array($_GET['id']));
       
    }
}