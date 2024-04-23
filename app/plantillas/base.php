<!DOCTYPE html>
<html>
  <head>
    <title>Concierto Verano|Conciertos 2024</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href='web/css/style.css' />
  </head>
  <body>

    <header>
    <nav>
      <h1 class="Title">Concierto Verano</h2>
      <ul>
        <li><a href="index.php?ctl=inicio">Inicio</a></li>
        <li><a href="index.php?ctl=pedirEntrada">Reservar</a></li>
        <?php if(isset($_SESSION['usuario'])):?>
         <li><a href="index.php?ctl=confirmarPago">Confirmar Pago</a> </li>
        <?php endif;?>
      </ul>
    </nav>
    </header>

    <main id="contenido">
      <?= $contenido ?>
    </main>

    <footer>
      <hr>
      <p class="anuncio">- Pie de página -</p>
    </footer>
  </body>
</html>
