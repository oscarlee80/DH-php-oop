<?php
function dd($par){
  echo "<pre>";
  var_dump($par);
  exit;
}

class Alumno {
  private $email;
  private $id;
  private $edad;
  private $nombreCompleto;
  private $dni;

  public function __construct($email, $nombreCompleto,$edad,$dni) {
    $this->email = $email;
    $this->nombreCompleto = $nombreCompleto;
    $this->edad = $edad;
    $this->dni = $dni;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
}

class Curso {
  private $nombre;
  private $turno;
  private $modalidad;
  private $comision = array();

  public function __construct($nombre,$turno,$modalidad) {
    $this->nombre = $nombre;
    $this->turno = $turno;
    $this->modalidad = $modalidad;
  }
  public function altaAlumnos($alumno){
    $this->comision[]=$alumno;
  }
}

$alumno1 = new Alumno("bort@gmail.com", "Bort bort", "14", 45000000);
$alumno2 = new Alumno("bart@gmail.com", "Bart bart", "14", 45000000);
$alumno3 = new Alumno("homero@gmail.com", "Homero", "14", 45000000);
$alumno4 = new Alumno("marge@gmail.com", "Marge", "14", 45000000);

$fullstack = new Curso ("Fullstack TN2","Noche","Presencial");
$fullstack->altaAlumnos($alumno1);
$fullstack->altaAlumnos($alumno2);
$fullstack->altaAlumnos($alumno3);
$fullstack->altaAlumnos($alumno4);
$alumno1->setEmail("rodo@digitalhouse.com");



dd($fullstack);
