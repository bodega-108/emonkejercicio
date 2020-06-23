<!-- =========================Inicio de requires========================================= -->
<?php require ('./controller/helpers.php')?>
<?php require ('./layouts/head.php');?>
<?php if(!isset($_SESSION['usuario'])){
  header('Location:index.php');
} 
?>
<!-- =========================Fin de requires========================================= -->

<header class="header-juego">
  <h1 class="marcador"><?php echo isset($_SESSION['datos']['info']) ? $_SESSION['datos']['info'] : "Quien ganará?"; ?></h1>
</header>
<!-- =========================Inicio de seccion del juego========================================= -->
  <section class="section-juego">
    <div class="contenedor-jugador">    
      <h1 class="numero"><?php echo isset($_SESSION['datos']) ? $_SESSION['datos']['numero'] : "Eligiendo número"; ?></h1>
        <form class="formulario-juego" action="procesoJuego.php" method="POST">
            <p>Ingresa un número</p>
            <input type="number" name="numero" id="numero">
            <?php echo isset($_SESSION['errores_juego']) ? mostrarError($_SESSION['errores_juego'],'numero') : null; ?>
            <button type="submit" class="btn-play">Jugar!!</button>
        </form>
    </div>
  
   <div class="contenedor-versus">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-dark  " data-toggle="modal" data-target="#exampleModal">
  Reglas del Juego
</button>
<!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Reglas del Juego</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>1- Debes ingresar un número entre el 1 y 10.</p>
              <p>2- Si el número que elige Emonk-Machine es par, ganará el jugador que tenga el número mas alto.</p>
              <p>3- Si el número que elige Emonk-Machine es impar, ganará el jugador que tenga el número mas bajo.</p>
              <p>Suerte!!!</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Fin Modal -->
    <div class="contenedor-adversario">
        <h1 class="numero"><?php echo isset($_SESSION['datos']) ? $_SESSION['datos']['numero_adversario'] : "Eligiendo número"; ?></h1>
    <h1>Emonk-Machine</h1>
    </div>

</section>
<!-- =========================Fin de seccion del juego========================================= -->

<?php borrarErroresJuego()?>


<?php require ('./layouts/footer.php');?>
