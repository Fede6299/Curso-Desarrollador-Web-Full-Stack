<?php 

class Persona {
    /* 
        public => publico (puedo acceder de cualquier lado)
        private => privado (solo puede acceder el mismo objeto de forma interna)
        protected => protegido (...)
    */

    private $nombre; //ES UNA VARIABLE DE ESCRITURA Y DE LECTURA
    private $apellido; // EL SETTER Y GETTER LO GENERAMOS AUTOMATICO CON LA EXTENSION

    public function __construct($valueNombre, $valueApellido){
        $this->nombre = $valueNombre;
        $this->apellido = $valueApellido;
    }

    //VAMOS A SETTEAR EL VALOR DEL ATRIBUTO NOMBRE
    public function setNombre($valueNombre){
        $this->nombre = $valueNombre;
    }

    //VAMOS A HACER EL GETTER DEL ATRIBUTO NOMBRE
    public function getNombre(){
        return $this->nombre;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }
}
