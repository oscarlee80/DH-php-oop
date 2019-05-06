<?php
require ("../loader.php");

class Profesor
{
    private $idProfesor;
    private $nombre;
    private $apellido;
    private $antiguedad;

    public function __construct($idProfesor, $nombre, $apellido, $antiguedad)
    {
        $this->idProfesor = $idProfesor;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->antiguedad = $antiguedad;
    }

    public function setIdProfesor($idProfesor)
    {
        $this->idProfesor = $idProfesor;
    }
    public function getIdProfesor()
    {
        return $this->idProfesor;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function getApellido()
    {
        return $this->apellido;
    }

    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;
    }
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

}
