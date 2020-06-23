<?php
// Scripts para cierre de sesión 
    session_start();

    if(isset($_SESSION['usuario'])){
        session_destroy();
    }
    header("Location:index.php");
