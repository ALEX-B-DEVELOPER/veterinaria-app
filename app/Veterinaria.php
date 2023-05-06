<?php
class Veterinaria{

    private string $nombre;
    private string $direccion;
    private string $telefono;
 
    public function __construct($nombre, $direccion, $telefono){
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getTelefono(){
        return $this->telefono;
    }
}

?>