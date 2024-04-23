<?php ob_start() ?>
<?php var_dump($_SESSION)?>
<form action="index.php?ctl=reserva" method="post">
    <label for="dni">DNI :</label>
    <input type="text" name="dni" placeholder="Ejemplo: 18799867A">
    <label for="localidades">Localidades: </label>
    <input type="number" name="localidades" min="1" max="<?= $_SESSION['reserva']['entradasDisponibles'] ?>">
    <br>
    <button type="submit">Enviar</button>
</form>
 <?php $contenido = ob_get_clean() ?>

 <?php include 'base.php' ?>