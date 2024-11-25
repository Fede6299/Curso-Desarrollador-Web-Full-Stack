<?php 

class Hogar {
    private $direccion;
    private $habitantes;

    public function __construct(){
        $this->habitantes = [];
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function agregarHabitante($persona){
        array_push($this->habitantes, $persona);
    }

    public function mostrarHabitantes(){
        $contadorPersona = 1;
        foreach($this->habitantes as $persona){
            echo "Habitante $contadorPersona: ".$persona->getApellido().", ".$persona->getNombre();
            echo "<br>";
            $contadorPersona++;
        }
    }
}