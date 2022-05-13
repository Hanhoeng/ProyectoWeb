<?php
if (class_exists("sugerencias")!=True){ 
    class sugerencias{
        protected $ID;
        protected $NOMBRE;
		protected $CORREO;
        protected $SUGERENCIA;
    
        public function __construct($id=NULL,$nombre=NULL,$correo=NULL,$sugerencia=NULL)
        {
            $this->ID=$id;
            $this->NOMBRE=$nombre;
			$this->CORREO=$correo;
            $this->SUGERENCIA=$sugerencia;
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

		function getCORREO(){
            return $this->CORREO;
        }
    
        function setCORREO($correo){
            $this->CORREO=$correo;
        }
    
        function getSUGERENCIA(){
            return $this->SUGERENCIA;
        }
    
        function setSUGERENCIA($sugerencia){
            $this->SUGERENCIA=$sugerencia;
        }
    }
    }
?>