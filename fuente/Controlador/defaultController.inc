<?php
// Ejemplo de controlador para página home de la aplicación
class DefaultController
{ public function inicio()
  { 
    if(!empty($_SESSION)) var_dump($_SESSION);
    require __DIR__ . '/../../fuente/Repositorio/ActuacionRepositorio.php';
    $todo = (new ActuacionRepositorio())->getTodo();
    require __DIR__ . '/../../app/plantillas/inicio.php';
  }
}