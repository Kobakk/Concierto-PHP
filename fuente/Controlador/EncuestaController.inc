<?php

class EncuestaController
{
    public function encuesta()
    {
        if (!isset($_POST['ok'])) {
            require_once __DIR__ . '/../Repositorio/CiudadRepositorio.inc';
            try {
                $ciudades = (new CiudadRepositorio())->getCiudades();
                //var_dump($ciudades);
            } catch (\PDOException $ex) {
                die($ex->getMessage());
            }
        }
        include __DIR__ . '/../../app/plantillas/encuesta.inc';
    }
}
//MODULARIZAR LAS BAINAS