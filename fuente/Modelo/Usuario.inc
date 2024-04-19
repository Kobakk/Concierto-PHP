<?php
class Usuario{
    private int ID;
	private string eCorreo varchar(100) NOT NULL,
	private string pwd varchar(255) NOT NULL,
	private string nombre varchar(50) NOT NULL,
	private string apellido varchar(100) NOT NULL,
	private string ciudad varchar(40) NOT NULL,
	private string cp char(5) NOT NULL,
	private string provincia varchar(22) NOT NULL,
	private string $tlfno;

    private array $errores = [];

    public function __construct()
    {
        
    }

    /** MUTADORES */
    /*** ACCESORIOS */
    public function setCorreo(string $eCorreo): Usuario{
        if(!filter_var($eCorreo, FILTER_VALIDATE_EMAIL)){
            $this-$errores['elCoorreo']='Formato de eCorreo no correcto';
            return null;
        }
        $this->eCorreo=$eCorreo;
        return $this;
    }
    public function setPwd(string $pwd): ?Usuario{
       $exReg = '';
    }
    public function setNombre(string $nombre) : Usuario{
        $expReg = '/[A-ZÁÉÍÓÚÑ]';
        if(!preg_match($expReg, $nombre)){
            $this->errores['nombre'] = 'Formato de nombre no correcto';
            return null;
        }

    }

}