<?php
class ActuacionRepositorio{
    public function getTodo():array{
        $sql = 'SELECT idActuacion, fecha, hora, grupo, precio, entradasDisponibles
                    FROM actuacion';
        require_once __DIR__ . '/../../core/ConexionBd.inc';         
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
    }
    public function getBanda($nombreGrupo):array{
        $sql = 'SELECT idActuacion, fecha, hora, grupo, precio, entradasDisponibles 
        FROM actuacion WHERE grupo = :grupo';
        require_once __DIR__ . '/../../core/ConexionBd.inc';         
        try{
            $con = (new ConexionBd())->getConexion();
            $snt = $con->prepare($sql);
            $snt->bindValue(':grupo', $nombreGrupo);
            $snt->execute();
            return $snt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $ex){
            throw $ex;
        } finally {
            if(isset($snt)) unset($snt);
            if(isset($con)) $con=null;
        }
        return [];
    }
}