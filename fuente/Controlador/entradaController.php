<?php
// Ejemplo de controlador para página home de la aplicación
class entradaController
{ public function inicio()
  { 
    /*require __DIR__ . '/../../fuente/Repositorio/TicketsRepositorio.php';
    $todo = (new TicketsRepositorio())->getTickets();*/
    require __DIR__ . '/../../app/plantillas/pedirEntrada.php';
  }
}