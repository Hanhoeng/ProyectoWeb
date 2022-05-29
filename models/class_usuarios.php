<?php
if (class_exists("usuarios")!=True){ 
    class usuarios{
        protected $ID;
        protected $NOMBRE;
        protected $CONTRASEÑA;
        protected $IS_ADMIN;
    
        public function __construct($id=NULL,$nombre=NULL,$contraseña=NULL,$is_admin=NULL)
        {
            $this->ID=$id;
            $this->NOMBRE=$nombre;
            $this->CONTRASEÑA=$contraseña;
            $this->IS_ADMIN=$is_admin;
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

        function getIS_ADMIN(){
            return $this->IS_ADMIN;
        }
    
        function setIS_ADMIN($is_admin){
            $this->IS_ADMIN=$is_admin;
        }
    }
    }
?>