<?php
class reservaController{
    public function reserva(){
        var_dump($_SESSION);
       if(isset($_POST)) {
        $solucion = $_POST;
       }
    require_once __DIR__ . '../../../app/plantillas/reserva.php';
    }

    public function confirmarReserva(){

    }
}