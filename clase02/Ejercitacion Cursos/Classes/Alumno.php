<?php
require ("../helpers.php");

class Alumno
{
    private $idAlumno;
    private $nombre;
    private $apellido;
    private $email;

    public function __construct($idAlumno, $nombre, $apellido, $email)
    {
        $this->idAlumno = $idAlumno;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
    }
    public function setIdAlumno($idAlumno)
    {
        $this->idAlumno = $idAlumno;
    }
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}
$alumno1 = new Alumno (12, "Oscar", "Lee", "oscarlee80@gmail.com");

$alumno1->setNombre("Juan");
dd($alumno1->getIdAlumno());