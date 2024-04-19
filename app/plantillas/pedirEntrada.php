<?php ob_start() ?>
  <h1 class="anuncio">Coachealla Dos</h1>
  <h2 class="anuncio">El mejor evento de este verano.</h2>
  <?php if(isset($todo)):?>
  <?php endif;?>
  <form action="">
<form action="submit.php" method="post">
    <label for="opciones">Selecciona Artistas:</label>
    <select name="opciones" id="opciones">
        <option value="opcion1">Opción 1</option>
        <option value="opcion2">Opción 2</option>
        <option value="opcion3">Opción 3</option>
        <option value="opcion4">Opción 4</option>
    </select>
    <br>
    <input type="submit" value="Enviar">
</form>
  </form>
 <?php $contenido = ob_get_clean() ?>

 <?php include 'base.php' ?>
