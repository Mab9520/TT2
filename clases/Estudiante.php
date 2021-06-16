<?php

class Estudiante{
    
    public static function registrar($datos){//registra el usuario
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
        //$correo = $_POST['correo'];
        $consulta = $conexion->prepare("INSERT INTO estudiante (Nombre, Apellidos, Instituto, Correo, Contraseña, Telefono, rol_id, confirmado , codigo) VALUES (:nombre, :apellidos, :instituto, :correo, :pass, :telefono, 2, :confirmado, :codigo)");
        if($consulta->execute(array(
            ':nombre'=> $datos[0],
            ':apellidos'=> $datos[1],
            ':instituto' => $datos[2],
            ':correo' => $datos[3],
            ':pass' => $datos[4],
            ':telefono' => $datos[5],
            ':confirmado' => $datos[6],
            ':codigo' => $datos[7]
        ))){ //Si el registro es correcto muestra este mensaje
            ?>
            <script>
        		Swal.fire({
            	title: 'Se han registrado los datos correctamente',
                text: 'Te hemos enviado un código de verificación, revisa tu correo',
            	icon: 'success',
            	confirmButtonText: 'Aceptar'
        		});
    		</script>
            <?php
        } else{//si falla el registro muestra este mensaje
            ?>
            <script>
        		Swal.fire({
            	title: 'Ha ocurrido un error en su registro, inténtelo nuevamente',
            	icon: 'error',
            	confirmButtonText: 'Aceptar'
        		});
    		</script>
            <?php
        }
        
    }
   public static function verificar($correo){  //verifica que el usuario no exista mediante la verificacion del correo en la bd
    $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");

        $consulta = $conexion->prepare("SELECT * FROM estudiante WHERE correo = :correo");
        $consulta->execute(array(':correo' => $correo));
        $resultado = $consulta->fetchAll();
        return $resultado;
    }
    
    

    public static function verEspecialistas(){//Muestra los nombres del especialista
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
    
            $sql= "SELECT * FROM especialista";
            $execute = $conexion->query($sql);
            $request = $execute->fetchall(PDO::FETCH_ASSOC);
            return $request;           
    }

    public static function verInfoEspecialistas(){//Muestra la informacion del especialista en la tabla+boton de agregar
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
        $result ='';
        $row = null;
        $sql = "SELECT * FROM especialista WHERE Cedula =?";
        $execute = $conexion->prepare($sql);
        $results = $execute->execute(array($_GET['id']));
        $row = $execute->fetch();
        ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <form method="POST"> 
                   
            <table class="informacion">
            <thead><th colspan="2"><?php echo $row['Nombre']; echo " "; echo $row['Apellidos']?></th></thead>
            <tr><td>Correo electrónico</td>
            <td><?php echo $row['Correo'];?></td></tr>
            <tr><td>Telefono</td>
            <td><?php echo $row['Telefono'];?></td></tr>
            <tr><td>Cedula profesional</td>
            <td><?php echo $row['Cedula'];?></td></tr>
            <td colspan="2"><a href="?agregar=<?php echo $_GET['id']?>"><input class="btn" type="submit" value="Enviar solicitud" name="solicitar"></a></td>
            </table>
            </form>  
                </div>
            </div>
        </div>
        
    <?php   
    }

    public static function usuarioPorId($id){//Selecciona el estudiante mediante el id que obtenemos de la url con un get
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");

        $consulta = $conexion->prepare("SELECT * FROM estudiante WHERE id = :id");
        $consulta->execute(array(':id' => $id));
        $resultado = $consulta->fetchAll();
        return $resultado;
    }
    public static function editarDatos($id, $datos){//Edita los datos del estudiante
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");

        $consulta = $conexion->prepare("UPDATE estudiante SET Nombre = :nombre, Apellidos = :apellidos, Contraseña = :pass, Telefono = :telefono WHERE id = :id");
        if($consulta->execute(array(
            ':nombre'=> $datos[0],
            ':apellidos'=> $datos[1],
            ':pass' => $datos[2],
            ':telefono' => $datos[3],
            ':id' =>$id
        ))){//si se editan los datos se muestra este script
            ?>
        <script>
            Swal.fire({
            title: 'Los datos se han actualizado correctamente',
            icon: 'success',
            confirmButtonText: 'Ok'
            }).then( () =>{
            location.href = "editarDatosEstudiante.php";
        });
        </script>
        <?php
        } else{//si no se editan muestra este script
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

    public static function eliminarDatos($id){//Elimina la cuenta del usuario
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
        $consulta = $conexion->prepare("DELETE  FROM estudiante WHERE id = :id");
        $consulta->execute(array(
            ':id' =>$id
        ));
        
    }
    public static function cerrarSesion(){//cierra y destruye la sesion
        
        session_unset();
        session_destroy();
}
    public static function completarActividad($id){//Completa la actividad y coloca en la tabla de la bd files el status en 1 si esta completada
        $conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
        $result= $conexion->prepare("UPDATE files SET status = 1 WHERE id = :id");
        $consulta->execute(array(
            ':id' => $id   
));
    }

}
?>