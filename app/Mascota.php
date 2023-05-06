<?php
class Mascota{

    private string $nombre;
    private string $genero;
    private string $raza;
    private int $PropietarioId;
 
    public function __construct(string $nombre, string $genero, string $raza, int $PropietarioId){
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->raza = $raza;
        $this->PropietarioId = $PropietarioId;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function getRaza(){
        return $this->raza;
    }

    public function getPropietarioId(){
        return $this->PropietarioId;
    }
}

?>