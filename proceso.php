<?php 
    //INICIO DE LOGICA 
    
    // VALIDACIÓN DE DATOS

    if(isset($_POST)){
        if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

        // Creacion de sesion
        // creacion de variables que almacenarán el usuario
        $usuario =isset($_POST['username'])? $_POST['username'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;
       
        // Array de errores
        $errores = array();

        // validacion si el usuario no ingresa el usuario o introduce el usuario incorrecto
        if(empty($usuario)){
            $usuario_validado = true;
           
            $errores['usuario']="Debe ingresar un Usuario";

        }else if($usuario !== 'emonk'){
            $usuario_validado = false;
            $errores['usuario']="El usuario ingresado es invalido";
            
        }else{
           
            $usuario_validado = false;
        }
        // validacion si el usuario no ingresa la password o ingresa una password incorrecta
        if(empty($password)){
            $password_validado = false;
            $errores['password']="Debe ingresar su password";
            var_dump($errores);
        }else if($password !== 'emonkrocks'){
            $password_validado = false;
            $errores['password']="La password ingresada es incorrecta";
            var_dump($errores);
        }else{
            $password_validado = true;
        }
        
        if(count($errores) !== 0){
            $inicio_sesion = true;
            $_SESSION['errores'] = $errores;

            header('Location:index.php');

        }else{
            $_SESSION['usuario'] = $usuario;

            header('Location:juego.php');


        }




    } 

    

