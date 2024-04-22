<?php ob_start() ?>
  <h1 class="anuncio">Coachealla Dos</h1>
  <h2 class="anuncio">El mejor evento de este verano.</h2>
<form action="index.php?ctl=comprobarEntrada" method="post">
    <label for="opciones">Selecciona Grupo:</label>
    <select name="opciones" id="opciones">
  <?php if(isset($todo)):?>
    <?php foreach($todo as $artista): ?>
        <option value="<?= $artista['grupo']?>"><?= $artista['grupo']?></option>
    <?php endforeach; ?>
    </select>
    <br>
    <button type="submit">Enviar</button>
</form>
  <?php endif;?>
 <?php $contenido = ob_get_clean() ?>

 <?php include 'base.php' ?>
