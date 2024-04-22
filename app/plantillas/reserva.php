<?php ob_start() ?>
<form action="index.php?ctl=reserva" method="post">
    <label for="dni">DNI :</label>
    <input type="text" name="dni">
    <label for="localidades">Localidades: </label>
    <input type="number" name="localidades" min="0" max="5">
    <br>
    <button type="submit">Enviar</button>
</form>
 <?php $contenido = ob_get_clean() ?>

 <?php include 'base.php' ?>