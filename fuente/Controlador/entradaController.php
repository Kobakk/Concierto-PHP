<?php
// Ejemplo de controlador para página home de la aplicación
class entradaController
{
  public function inicio()
  {
    require_once __DIR__ . '/../../fuente/Repositorio/TicketsRepositorio.php';
    $todo = (new TicketsRepositorio())->getTickets();
    require_once __DIR__ . '/../../app/plantillas/pedirEntrada.php';
  }
  public function comprobarHoraGrupo()
  {
    require_once __DIR__ . '/../../fuente/Repositorio/TicketsRepositorio.php';
    $banda =  (new TicketsRepositorio())->getBanda($_POST['opciones']);
    var_dump($banda);
    if (sizeof($banda) > 1) {

      $_SESSION['reserva']  = $banda['grupo'];
      $_SESSION['reserva']['idActuacion'] = $banda['idActuacion'];
      $_SESSION['reserva']['fecha'] = $banda['fecha'];
      //$_SESSION['reserva']['hora'] = $banda['hora'];
      $_SESSION['reserva']['grupo'] = $banda['grupo'];
      $_SESSION['reserva']['precio'] = $banda['precio'];
      require_once __DIR__ . '/../../app/plantillas/seleccionarHora.php';
    }
      /*
      $_SESSION['reserva']  = array( 
      'idActuacion' => $banda['idActuacion'],
      'fecha' => $banda['fecha'],
      'hora' => $banda['hora'],
      'grupo' => $banda['grupo'],
      'precio' => $banda['precio'],
       ) ;
       */

      header('Location: index.php?ctl=reserva');
  }
  public function escogerEntreVariasHoras(){
    $_SESSION['reserva']['hora'] = $_POST['opciones'];
  }
}
