<?php

class Gold extends Cuenta 
{
    public function __construct($CBU)
    {
        parent:: __construct($CBU);
    }
    public function debitar($monto,$origen)
    {
        if($origen == "Link")
        {
            $this->balance = $this->balance - ($monto * 1.05);
            return $this->balance;
        }
        $this->balance = $this->balance - $monto;
        return $this->balance;
    }
    public function acreditar($monto)
    {
        if($monto >= 25000)
        {
            $this->balance = $this->balance + $monto;
            return $this->balance;
        }  
        $this->balance = $this->balance + ($monto * 0.97);
        return $this->balance;
    }
}