<?php

class Alumno
{
    private $nombre;
    private $apellido;
    private $idAlumno;

    public function __construct(int $nombre ,string $apellido,string $idAlumno)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->idAlumno = $idAlumno;
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

    public function setIdAlumno($idAlumno)
    {
        $this->idAlumno = $idAlumno;
    }

    public function getIdAlumno()
    {
        return $this->idAlumno;
    }
}

