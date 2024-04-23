<?php ob_start() ?>
  <h1 class="anuncio">Coachealla Dos</h1>
  <h2 class="anuncio">El mejor concierto de este verano</h2>
  <article class="box">
<form action="index.php?ctl=escogerEntreVariasHoras" method="post">
    <label for="opciones">Selecciona la hora:</label>
    <select name="opciones" id="opciones">
  <?php if(isset($banda)):?>
    <?php foreach($banda as $hora): ?>
        <?php  $horaCorrecta = date( "H:i", strtotime($hora['hora']));?>
        <option value="<?= $horaCorrecta?>"><?= $horaCorrecta?></option>
    <?php endforeach; ?>
    </select>
    <br>
    <button type="submit">Enviar</button>
</form>
  <?php endif;?>
  </article>
 <?php $contenido = ob_get_clean() ?>
 <?php include 'base.php' ?>