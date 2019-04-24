<?php

class Classic extends Cuenta 
{
    public function __construct($CBU)
    {
        parent:: __construct($CBU);
    }
    public function debitar($monto,$origen)
    {
        if($origen == "caja")
        {
            $this->balance = $this->balance - $monto;
            return $this->balance;
        }
        if($origen == "Link")
        {
            $this->balance = $this->balance - ($monto * 1.1);
            return $this->balance;
        }
        $this->balance = $this->balance - ($monto * 1.05);
        return $this->balance;
    }
    public function acreditar($monto)
    {
        $this->balance = $this->balance + ($monto * 0.95);
        return $this->balance;
    }
}