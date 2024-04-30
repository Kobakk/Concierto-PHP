<?php

class ReservarRepositorio{
    public function reservar(string $dni, string $fecha, string $hora, int $id, int $localidades):int{
        $sql = 'INSERT INTO dbo.Reserva (dni, fecha, hora,idActuacion, localidades, pagado)
        VALUES(:dni, :fecha, :hora,:idActuacion,:localidades, 0);';
        require_once __DIR__ . '/../../core/ConexionBd.inc';         
        try{
            $con = (new ConexionBd())->getConexion();
            $snt = $con->prepare($sql);
            $snt->bindValue(':dni', $dni);
            $snt->bindValue(':fecha', $fecha);
            $snt->bindValue(':hora', $hora);
            $snt->bindValue(':idActuacion', $id);
            $snt->bindValue(':localidades', $localidades);             
            $snt->execute();
            return $con->lastInsertId();
        } catch (\PDOException $ex){
            throw $ex;
        } finally {
            if(isset($snt)) unset($snt);
            if(isset($con)) $con=null;
        }
    }
    
    public function reservaCorrecta(string $dni, array $datosReserva):int {
        $sql = 'INSERT INTO dbo.Reserva (dni, fecha, hora,idActuacion, localidades, pagado)
        VALUES(:dni, :fecha, :hora,:idActuacion,:localidades, :pagado);'; 
        try{
            $con = (new ConexionBd())->getConexion();
            $snt = $con->prepare($sql);
            $snt->bindValue(':dni', $dni);
            $snt->bindValue(':fecha', $datosReserva['fecha']);
            $snt->bindValue(':hora', $datosReserva['hora']);
            $snt->bindValue(':idActuacion', $datosReserva['id']);
            $snt->bindValue(':localidades', $datosReserva['localidades']);             
            $snt->execute();
            return $con->lastInsertId();
        } catch (\PDOException $ex){
            throw $ex;
        } finally {
            if(isset($snt)) unset($snt);
            if(isset($con)) $con=null;
        }      
    }

    public function confirmarReserva(int $id){
        $sql = 'UPDATE reserva 
        set pagado = 1   
        WHERE idReserva = :id';
        require_once __DIR__ . '/../../core/ConexionBd.inc';         
        try{
            $con = (new ConexionBd())->getConexion();
            $snt = $con->prepare($sql);
            $snt->bindValue(':id', $id);
            $snt->execute();
        }catch (\PDOException $ex){
            throw $ex;
        } finally {
            if(isset($snt)) unset($snt);
            if(isset($con)) $con=null;
        }
    }
}