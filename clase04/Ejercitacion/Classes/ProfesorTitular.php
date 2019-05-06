<?php

class ProfesorAdjunto extends Profesor 
{
    private $especialidad;

    publinc function __construct($horas, $idProfesor, $nombre, $apellido, $antiguedad)
    {
        parent::__construct($idProfesor, $nombre, $apellido, $antiguedad)
        $this->especialidad = $especialidad;
    }
  
    public function getEspecialidad()
    {
        return $this->horas;
    }
    
    public function setEspecialidad($horas)
    {
        $this->horas = $horas;
    }
}