<?php

class Platinum extends Cuenta 
{
    public function __construct($CBU)
    {
        parent:: __construct($CBU);
    }
    public function debitar($monto,$origen)
    {
        if($this->balance >= 5000) 
        {
            $this->balance = $this->balance - $monto;
            return $this->balance;        
        }
        $this->balance = $this->balance - ($monto * 1.05);
        return $this->balance;
    }
    public function acreditar($monto)
    {
        $this->balance = $this->balance + $monto;
        return $this->balance;
    }
}
