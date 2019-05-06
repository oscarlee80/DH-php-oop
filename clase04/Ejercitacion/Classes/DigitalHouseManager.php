<?php

class ManagerSistema
{
    private $cursos = array();
    private $alumnos = array();
    private $profesores = array();

    public function __construct(Curso $cursos,Alumno $alumnos,Profesor $profesores)
    {
        $this->cursos = $cursos;
        $this->alumnos = $alumnos;
        $this->profesores = $profesores;
    }

    public function setCursos(Curso $cursos)
    {
        $this->cursos = $cursos;
    }
    public function getCursos()
    {
        return $this->cursos;
    }

    public function setAlumnos(Alumno $alumnos)
    {
        $this->alumnos = $alumnos;
    }
    public function getAlumnos()
    {
        return $this->alumnos;
    }

    public function setProfesores(Profesor $profesores)
    {
        $this->profesores = $profesores;
    }
    public function getProfesores()
    {
        return $this->profesores;
    }

}
