<?php
// Ejemplo de controlador para página home de la aplicación
class entradaController
{
  public function inicio()
  {
    require_once __DIR__ . '/../../fuente/Repositorio/ActuacionRepositorio.php';
    $todo = (new ActuacionRepositorio())->getTodo();
    var_dump($todo);
    require_once __DIR__ . '/../../app/plantillas/pedirEntrada.php';
  }
  public function comprobarHoraGrupo()
  {
    require_once __DIR__ . '/../../fuente/Repositorio/ActuacionRepositorio.php';
    $banda =  (new ActuacionRepositorio())->getBanda($_POST['opciones']);
    var_dump($banda);

    if (sizeof($banda) > 1) {
      $_SESSION['reserva'] = $banda[0];
      require_once __DIR__ . '/../../app/plantillas/seleccionarHora.php';
    } else{
      $_SESSION['reserva']  =  $banda;
      header('Location: index.php?ctl=reserva');
    }
  }
  public function escogerEntreVariasHoras(){
    $_SESSION['reserva']['hora'] = $_POST['opciones'];
      header('Location: index.php?ctl=reserva');
  }
}
