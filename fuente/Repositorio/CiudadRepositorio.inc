<?php
class CiudadRepositorio{
    public function getCiudades():array{
        $sql = 'SELECT nombre, codCiudad, codPais
                    FROM ciudad';
        require_once __DIR__ . '/../../core/ConexionBd.inc'; //Llamamos a la configuración de la bbdd
        try{
            $con = (new ConexionBd())->getConexion();
            $snt = $con->prepare($sql);
            $snt->execute();
            return $snt->fetchAll(PDO::FETCH_ASSOC); // Devolvemos un array 'asociativo'complejo con los datos del bbdd
        } catch (\PDOException $ex){
            throw $ex;
        } finally {
            if(isset($snt)) 
                unset($snt);
            if(isset($con)) 
                $con=null;
        }
        return[];
    }
}