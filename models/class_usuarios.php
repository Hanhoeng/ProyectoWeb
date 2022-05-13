<?php
if (class_exists("usuarios")!=True){ 
    class usuarios{
        protected $ID;
        protected $NOMBRE;
        protected $CONTRASEÑA;
    
        public function __construct($id=NULL,$nombre=NULL,$contraseña=NULL)
        {
            $this->ID=$id;
            $this->NOMBRE=$nombre;
            $this->CONTRASEÑA=$contraseña;
        }
    
        function getID(){
            return $this->ID;
        }
    
        function setID($id){
            $this->ID=$id;
        }
    
        function getNOMBRE(){
            return $this->NOMBRE;
        }
    
        function setNOMBRE($nombre){
            $this->NOMBRE=$nombre;
        }
    
        function getCONTRASEÑA(){
            return $this->CONTRASEÑA;
        }
    
        function setCONTRASEÑA($contraseña){
            $this->CONTRASEÑA=$contraseña;
        }
    }
    }
?>