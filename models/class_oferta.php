<?php
if (class_exists("oferta")!=True){ 
	class oferta{
		protected $ID;
		protected $NOMBRE;
		protected $PRECIO;
		protected $ESPACIO;
		protected $CUENTAS;
		protected $GARANTIA;
		protected $NOMBRE_DOMINIO;
		protected $VENCIMIENTO;
	
		public function __construct($id=NULL,$nombre=NULL,$precio=NULL,$espacio=NULL,$cuentas=NULL,$garantia=NULL,$nombre_dominio=NULL,$vencimiento=NULL)
		{
			$this->ID=$id;
			$this->NOMBRE=$nombre;
			$this->PRECIO=$precio;
			$this->ESPACIO=$espacio;
			$this->CUENTAS=$cuentas;
			$this->GARANTIA=$garantia;
			$this->NOMBRE_DOMINIO=$nombre_dominio;
			$this->VENCIMIENTO=$vencimiento;
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
	
		function getPRECIO(){
			return $this->PRECIO;
		}
	
		function setPRECIO($precio){
			$this->PRECIO=$precio;
		}

		function getESPACIO(){
			return $this->ESPACIO;
		}
	
		function setESPACIO($espacio){
			$this->ESPACIO=$espacio;
		}
		
		function getCUENTAS(){
			return $this->CUENTAS;
		}
	
		function setCUENTAS($cuentas){
			$this->CUENTAS=$cuentas;
		}

		function getGARANTIA(){
			return $this->GARANTIA;
		}
	
		function setGARANTIA($garantia){
			$this->GARANTIA=$garantia;
		}

		function getNOMBRE_DOMINIO(){
			return $this->NOMBRE_DOMINIO;
		}
	
		function setNOMBRE_DOMINIO($nombre_dominio){
			$this->NOMBRE_DOMINIO=$nombre_dominio;
		}

		function getVENCIMIENTO(){
			return $this->VENCIMIENTO;
		}
	
		function setVENCIMIENTO($vencimiento){
			$this->VENCIMIENTO=$vencimiento;
		}
	}
	}
?>