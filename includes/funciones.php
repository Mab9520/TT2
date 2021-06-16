<?php
//Funciones generales de los usuarios

//Funcion para conexion
    function conexion($usuario, $pass){
        try{
            $conexion = new PDO('mysql:host=epiz_28894954;dbname=epiz_28894954_tt', $usuario, $pass);
            return $conexion;
        } catch (PDOException $e){
            return $e->getMessage();
        }
    }
    function datosVacios($datos){
        $vacio = false;
        $tamaño = count($datos);

        for($contador = 0; $contador <$tamaño; $contador++){
            if(empty($datos[$contador])){
                $vacio = true;
                break;
            }
        }

        return $vacio;
    }
//Funcion para limpiar de codigo malicioso la contraseña del estudiante para evitar inyecciones sql
    function limpiarEst($datos){
        $tamaño = count($datos);
        for($contador = 0; $contador <$tamaño; $contador++){
            if($contador != 4){
                $datos[$contador] = htmlspecialchars($datos[$contador]);
                $datos[$contador] = trim($datos[$contador]);
                $datos[$contador] = stripcslashes($datos[$contador]);
            }
        }
        return $datos;
    }
//Funcion para limpiar de codigo malicioso la contraseña del especialista para evitar inyecciones sql
    function limpiarEsp($datos){
        $tamaño = count($datos);
        for($contador = 0; $contador <$tamaño; $contador++){
            if($contador != 3){
                $datos[$contador] = htmlspecialchars($datos[$contador]);
                $datos[$contador] = trim($datos[$contador]);
                $datos[$contador] = stripcslashes($datos[$contador]);
            }
        }
        return $datos;
    }
//Verifica que exista una sesion activa, si no esta verificada nos lleva directamente al index
    function verificarSesion(){
        if(!isset($_SESSION['id'])){
            header('location: ../index.php');
        }
    }
//Nombre del archivo
    function file_name($string) {

        // Tranformamos todo a minusculas
    
        $string = strtolower($string);
    
        //Rememplazamos caracteres especiales latinos
    
        $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
    
        $repl = array('a', 'e', 'i', 'o', 'u', 'n');
    
        $string = str_replace($find, $repl, $string);
    
        // Añadimos los guiones
    
        $find = array(' ', '&', '\r\n', '\n', '+');
        $string = str_replace($find, '-', $string);
    
        // Eliminamos y Reemplazamos otros carácteres especiales
    
        $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
    
        $repl = array('', '-', '');
    
        $string = preg_replace($find, $repl, $string);
    
        return $string;
    }
    
    

?>