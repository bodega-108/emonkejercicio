<?php 

if($_POST){
   
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    // Array de datos del juego
    $datos = array();
    // Almacenando el número en la variable
     $numero =(int) $_POST['numero']; 
     $datos['numero']=$numero;
    
    //  Array de errores
    $errores_juego = array();

    //  Validaciones
    if(empty($numero)){
       $errores_juego['numero']="Debes ingresar un número"; 
       
    }else if($numero > 10){
        $errores_juego['numero']="Por favor ingresa un número entre 1 y 10";
        $$datos['numero']=0;

    }else if($numero <= 0){
        $errores_juego['numero']="Por favor ingresa un número entre 1 y 10";
        $$datos['numero']=0;
    }
        
    // Generando el numero random para el adversario
    $numero_adversario = rand(1,10);
    $datos['numero_adversario']=$numero_adversario;

  

//  ===============================INCIO DE LOGÍCA DEL JUEGO==============================================
    // Logica si el numero del adversario es par
   if($numero_adversario % 2 !== 0 && count($errores_juego) === 0){
       
            if($numero_adversario > $numero){
                $datos['info']= "Eres el ganador";
            }else if($numero_adversario === $numero){
                $datos['info']="Empate";
            }else{
                $datos['info']= "El ganador es Emonk-Machine";
            }
    //Logica si el número del adversario es impar 
    }else if($numero_adversario % 2 == 0 && count($errores_juego) === 0){
           
            if($numero_adversario > $numero){
                $datos['info']= "El ganador es Emonk-Machine";
            }else if($numero_adversario === $numero){
                $datos['info']="Empate";
            }else{
                $datos['info']= "Eres el Ganador";   
            }
    }else{
        $_SESSION['errores_juego']=$errores_juego;
        var_dump($_SESSION['errores_juego']);
        $$datos['numero']=0;
        $datos['numero_adversario']=0;

        header('Location:juego.php');

    }
//  ===============================FIN DE LOGÍCA DEL JUEGO==============================================
  
    $_SESSION['datos']=$datos;
    header('Location:juego.php');

}