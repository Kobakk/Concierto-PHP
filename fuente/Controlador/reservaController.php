<?php
class reservaController{
    public function reserva(){
        var_dump($_SESSION);
       if(isset($_POST)) {
            if(empty($_POST['dni']) || empty ($_POST['localidades'])){
                $_SESSION['error'] = "Especifique dni y localidades";
            } else{
                $dniPatron = "/^[0-9]{8}[a-zA-Z]$/";
                if(!preg_match($dniPatron, $_POST['dni'])){
                    $_SESSION['error'] = "Formato de DNI incorrecto";                    
                } else{
                    $_SESSION['usuario']['dni'] = $_POST['dni'];
                    $_SESSION['usuario']['localidades'] = $_POST['localidades'];
                    header('Location: index.php?ctl=inicio');
                }
            }

       }
    require_once __DIR__ . '../../../app/plantillas/reserva.php';
    }

    public function confirmarPago(){

        header('Location: index.php?ctl=inicio');
    }
}