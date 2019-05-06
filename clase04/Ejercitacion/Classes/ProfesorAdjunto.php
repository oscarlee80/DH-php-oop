<?php


class ProfesorAdjunto extends Profesor 
{
    private $horas;

    publinc function __construct($horas, $idProfesor, $nombre, $apellido, $antiguedad)
    {
        parent::__construct($idProfesor, $nombre, $apellido, $antiguedad)
        $this->horas = $horas;
    }
  
    public function getHoras()
    {
        return $this->horas;
    }

    public function setHoras($horas)
    {
        $this->horas = $horas;
    }
}