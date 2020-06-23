<?php
// Funcion para mostrar los errores en el formulario
function mostrarError($errores,$campo){

    $alerta = '';

    if(isset($errores[$campo]) && !empty($campo)){
       
        $alerta ="<div class='alerta_error'>".$errores[$campo]."</div>";
    
    }
    
    return $alerta;
}

// Funcion para borrar los errores en el formulario
function borrarErrores(){
    
    $_SESSION['errores']= null;
        unset($_SESSION['errores']);
    
    if(isset($_SESSION['usuario'])){
       
        $_SESSION['usuario']= null;
        unset($_SESSION['usuario']);
    } 
}
// Funcion para borrar los errores en el campo de juego

function borrarErroresJuego(){

    $_SESSION['errores_juego']= null;
        unset($_SESSION['errores_juego']);

    if(isset($_SESSION['datos'])){
       
         $_SESSION['datos']= null;
        unset($_SESSION['datos']);
    } 
  
}

