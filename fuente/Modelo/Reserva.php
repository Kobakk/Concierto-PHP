<?
class Reserva{
    private  int $ID;
    public function __construct(int $id)
    {
        $this->ID = $id;
    }
    public function getId():int{
        return $this->ID;
    }
}