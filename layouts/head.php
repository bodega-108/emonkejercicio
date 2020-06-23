<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio E-monk</title>

    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="assets/style.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

</head>
<body>
    <nav class="nav">
            <a href="#" class="nav-enlace">Eduardo Quintero</a>
                <?php if(!isset($_SESSION['usuario'])){
                    echo"<a href='cerrar.php' class='nav-enlace'>cerrar sesion</a>";
                } 
                ?>
        </nav>
   
    <?php session_start(); ?>