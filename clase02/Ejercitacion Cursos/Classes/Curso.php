<?php
require ("../helpers.php");

class Curso 
{
    private $idCurso;
    private $nombre;
    private $vacantes;

    public function __construct($idCurso, $nombre, $vacantes)
    {
        $this->idCurso = $idCurso;
        $this->nombre = $nombre;
        $this->vacantes = $vacantes;
    }

    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;
    }
    public function getIdCurso()
    {
        return $this->idCurso;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setVacantes($vacantes)
    {
        $this->vacantes = $vacantes;
    }
    public function getVacantes()
    {
        return $this->vacantes;
    }


}
$fullstack = new Curso ("TN2", "Full Stack", 35);
dd($fullstack->getNombre());