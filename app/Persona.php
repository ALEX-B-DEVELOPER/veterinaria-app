<?php
class Persona{

    private string $nombre;
    private string $apellido;
    private int $edad;
    private int $cedula;
 
    public function __construct(string $nombre, string $apellido, int $edad, int $cedula){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->cedula = $cedula;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getCedula(){
        return $this->cedula;
    }
}

?>