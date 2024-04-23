<?php ob_start() ?>
<h2 class="anuncio">Usa tu DNI para optener la reserva</h2>
<article class="box">
<form action="index.php?ctl=reserva" method="post">
    <label for="dni">DNI :</label>
    <input type="text" name="dni" placeholder="Ejemplo: 18799867A">
    <label for="localidades">Localidades: </label>
    <input type="number" name="localidades" min="1" max="<?= $_SESSION['reserva']['entradasDisponibles'] ?>">
    <br>
    <button type="submit">Enviar</button>
</form>
</article>
 <?php $contenido = ob_get_clean() ?>

 <?php include 'base.php' ?>