<!-- ================================Requires========================================== -->
<?php require ('./controller/helpers.php')?>
<?php require ('./layouts/head.php');?>
<!-- ================================Fin Requires========================================== -->

<!-- ================================Seccion presentacion del juego========================================== -->
<section class="section-presentacion">
<img src="./assets/img/emonk.webp" alt="" class="animate__animated animate__backInDown">
    <h1 class="titulo-juego animate__animated animate__backInDown">GAME</h1>
</section>
<!-- ================================Fin Seccion presentacion del juego========================================== -->
<!-- ================================Seccion del formulario========================================== -->
    <section class="section">
        <div class="contenedor">
            <div class="login">
                <h1>Login</h1>
                <form action="proceso.php" method="POST" class="formulario">
                    <input class="input-emonk" type="text" name="username" placeholder="usuario" id="username">
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'usuario') : null; ?>
                    <input class="input-emonk" type="password" name="password" id="password" placeholder="password">
                    <?php echo  isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'password') : null; ?>

                    <input type="submit" value="Ingresar" class="btn-play">
                    <?php borrarErrores(); ?>

                </form>
            </div>
        </div>
    </section>
<!-- ================================Fin Seccion del formulario========================================== -->

        
    <?php require ('./layouts/footer.php') ?>