<?php
class reservaController{
    public function reserva(){
       if(isset($_POST)) {
        $solucion = $_POST;
       }
    require_once __DIR__ . '../../../app/plantillas/reserva.php';
    }

    public function confirmarReserva(){

    }
}