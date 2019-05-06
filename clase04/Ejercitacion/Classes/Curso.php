<?php


class Curso 
{
    private $idCurso;
    private $nombre;
    private $profesorTitular;
    private $profesorAdjunto;
    private $cupos;
    private $alumnos;

    public function __construct(int $idCurso,string $nombre,ProfesorTitular $profesorTitular,ProfesorAdjunto $profesorAdjunto,int $cupos,Alumno $alumnos)
    {
        $this->idCurso = $idCurso;
        $this->nombre = $nombre;
        $this->profesorTitular = $profesorTitular;
        $this->profesorAdjunto = $profesorAdjunto;
        $this->cupos = $cupos;
        $this->alumnos = $alumnos;
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

    public function getAlumnos()
    {
        return $this->alumnos;
    }

    public function getProfesores()
    {
  
    }

}
