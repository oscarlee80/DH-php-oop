<?php

class Category 
{
  private $name;
  
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getCatName()
  {
    return $this->name;
  }
 
  public function setCatName($name)
  {
    $this->name = $name;
  }
}