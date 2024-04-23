<?php ob_start() ?>
  <h1 class="anuncio">Coachealla Dos</h1>
  <h2 class="anuncio">Bandas y Horarios</h2>

  <article class="box">
    <?php if(isset($todo)):?>

      <?php foreach($todo as $artista): ?>
  <div class="artistas">
    <h3 class="nombreArtista"><?= $artista['grupo'] ?></h3>
    <p class="hora"><?= date( "H:i", strtotime($artista['hora'])) ?></p>
    <p class="fecha"><?= date("d/m", strtotime($artista['fecha']))?></p>
    <p class="precio"><?= number_format($artista['precio'], 2, ',', '.') . ' €' ?></p>
  </div>
      <?php endforeach; ?>

    <?php endif;?>
  </article>
  
 <?php $contenido = ob_get_clean() ?>
 <?php include 'base.php' ?>
