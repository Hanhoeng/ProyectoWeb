<?php
class Plan
{
	private $id;
	private $id_usuario;
	private $id_oferta;
	private $fecha_registro;
	
	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}
if (class_exists("plan")!=True){ 
    class plan{
        protected $ID;
        protected $ID_USUARIO;
		protected $ID_OFERTA;
        protected $FECHA_REGISTRO;
    
        public function __construct($id=NULL,$id_usuario=NULL,$id_oferta=NULL,$fecha_registro=NULL)
        {
            $this->ID=$id;
            $this->ID_USUARIO=$id_usuario;
            $this->ID_OFERTA=$id_oferta;
			$this->FECHA_REGISTRO=$fecha_registro;
        }
    
        function getID(){
            return $this->ID;
        }
    
        function setID($id){
            $this->ID=$id;
        }
    
        function geID_USUARIO(){
            return $this->ID_USUARIO;
        }
    
        function setID_USUARIO($id_usuario){
            $this->ID_USUARIO=$id_usuario;
        }
    
        function getID_OFERTA(){
            return $this->ID_OFERTA;
        }
    
        function setID_OFERTA($id_oferta){
            $this->ID_OFERTA=$id_oferta;
        }
		function getFECHA_REGISTRO(){
            return $this->FECHA_REGISTRO;
        }
    
        function setFECHA_REGISTRO($fecha_registro){
            $this->FECHA_REGISTRO=$fecha_registro;
        }
    }
    }
?>