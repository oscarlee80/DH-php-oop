<?php

abstract class Cuenta 
{
    protected $CBU;
    protected $balance;
    protected $ultimoMovimiento;

    public function __construct($CBU)
    {
        $this->CBU = $CBU;
    }

    public function setCBU($CBU)
    {
        $this->CBU = $CBU;
    }
    public function getCBU()
    {
        return $this->CBU;
    }
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance;
    }
   
    abstract public function debitar($monto,$origen);

    public function acreditar($monto)
    {
        $this->balance = $this->balance + $monto;
        $this->setUltimoMovimiento();
    }
    private function setUltimoMovimiento()
    {
        $fecha = date ("D d-M-Y");
        $this->ultimoMovimiento = $fecha;
    }

}