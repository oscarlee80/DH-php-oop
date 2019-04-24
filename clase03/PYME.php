<?php

class PYME extends Cliente
{
    Private $razonSocial;
    Private $CUIT;

    public function __construct($razonSocial,$CUIT,$email,$pass)
    {
        parent:: __construct($email,$pass);
        $this->razonSocial = $razonSocial;
        $this->CUIT = $CUIT;
    }  
    
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;
    }
    public function getRazonSocial()
    {
    return $this->razonSocial;
    }
    public function setCUIT($CUIT)
    {
    return $this->CUIT;
    }
    public function getCUIT()
    {
    return $this->CUIT;
    }
}