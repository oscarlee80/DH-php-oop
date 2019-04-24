<?php

class Black extends Cuenta 
{
    public function __construct($CBU)
    {
        parent:: __construct($CBU);
    }
    public function debitar($monto,$origen)
    {        
        $this->balance = $this->balance - $monto;
        return $this->balance;
    }
    public function acreditar($monto)
    {
        $this->balance = $this->balance + $monto;
        return $this->balance;
    }   

}