<?php

class Product
{
    private $name;
    private $description;
    private $price;
    private $category;

    public function __construct ($name, $description, $price, $category)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName ()
    {
        return $this->name;  
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getDescripcion ()
    {
        return $this->descripcion; 
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice ()
    {
        return $this->price;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getCategory ()
    {
        return $this->category;
    }

    
}