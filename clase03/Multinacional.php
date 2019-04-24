<?php

class Multinacional extends Cliente
{
    Private $razonSocial;
    Private $CUIT;
    Private $paisDeOrigen;

    public function __construct($razonSocial,$CUIT,$paisDeOrigen,$email,$pass)
    {
        parent:: __construct($email,$pass);
        $this->razonSocial = $razonSocial;
        $this->CUIT = $CUIT;
        $this->paisDeOrigen = $paisDeOrigen;
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
    public function setPaisDeOrigen($paisDeOrigen)
    {
    return $this->paisDeOrigen;
    }
    public function getPaisDeOrigen()
    {
    return $this->paisDeOrigen;
    }

}