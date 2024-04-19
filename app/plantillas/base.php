<!DOCTYPE html>
<html>
  <head>
    <title>Cadena Tiendas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href='web/css/style.css' />
  </head>
  <body>

    <header>
    <nav>
      <h1 class="h">Cocachella Dos</h1>
      <a href="index.php?ctl=inicio">Inicio</a> |
      <a href="index.php?ctl=pedirEntrada">Pide tu entrada owo</a>
    </nav>
</header>

    <div id="contenido">
      <?= $contenido ?>
    </div>
    <footer>
      <hr>
      <p class="anuncio">- Pie de página -</p>
    </footer>
  </body>
</html>
