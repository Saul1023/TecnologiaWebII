<?php
include_once "Estudiante.php";
class Estudiante {
    //Propiedades
    private $nombre;
    private $apellido;
    private $ci;
    //Metodos
    
    //Constructor
   public function __construct ($nombre=null,$apellido=null,$ci=null){
        $this->nombre = ($nombre!=null)? $nombre :"";
        $this->apellido = ($apellido!=null)? $apellido : "";
        $this->ci=($ci!=null)? $ci:"";
    }
    //agregar getters y setters

    

    public function __toString(){
        return __METHOD__."[ESTUDIANTE: $this->nombre, $this->apellido,CI $this->ci]";
        //return __FILE__."[ESTUDIANTE: $this->nombre, $this->apellido,CI $this->ci]";
        //return __LINE__."[ESTUDIANTE: $this->nombre, $this->apellido,CI $this->ci]";
        //return __CLASS__."[ESTUDIANTE: $this->nombre, $this->apellido,CI $this->ci]";
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

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of ci
     */ 
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * Set the value of ci
     *
     * @return  self
     */ 
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }
}