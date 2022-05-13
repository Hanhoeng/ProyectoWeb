<?php
include("class_usuarios.php");
include("class_db2.php");
class usuarios_dal extends class_db{
	
	function __construct()
	{
		parent::__construct();
	}

	function __destruct()
	{
        parent::__destruct();

	}

        //Insertar
    function insertar_usuario($obj){
        $sql = "insert into usuarios (";
        $sql .= "id,";
        $sql .= "nombre,";
        $sql .= "contraseña";
        $sql .= ") ";
        $sql .= "values(";
        $sql .= "'".$obj->getID()."',";
        $sql .= "'".$obj->getNOMBRE()."',";
        $sql .= "'".$obj->getCONTRASEÑA()."',";
        $sql .= ")";
        $this->set_sql($sql);
        $this->db_conn->set_charset("utf8");
        
        mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));

        if(mysqli_affected_rows($this->db_conn)==1) {
            $insertado=1;
        }else{
            $insertado=0;
        }
        unset($obj);
        return $insertado;
    }


        //borrar
    function borrar_usuario($obj){
        
        $sql = "delete from usuarios where id='".$obj->getID()."' and nombre='".$obj->getNOMBRE()."'";
     
        $this->set_sql($sql);
        $this->db_conn->set_charset("utf8");
        
        mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));

        if(mysqli_affected_rows($this->db_conn)==1) {
            $insertado=1;
        }else{
            $insertado=0;
        }
        unset($obj);
        return $insertado;
    }


    function actualiza_usuario($obj,$id){

        $sql = "update usuarios set ";
        $sql .= "id=".$obj->getID();
        $sql .= " where nombre = '".$obj->getNOMBRE()."' and id=$id";

       
        $this->set_sql($sql);
        $this->db_conn->set_charset("utf8");
        
        mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));

        if(mysqli_affected_rows($this->db_conn)==1) {
            $actualizado=1;
        }else{
            $actualizado=0;
        }
        unset($obj);
        return $actualizado;
    }


        function existeUsuario($ID,$NOMBRE){
        $ID=$this->db_conn->real_escape_string($ID);
        $NOMBRE=$this->db_conn->real_escape_string($NOMBRE);

        $sql = "select count(*) from usuarios";
        $sql .= " where rfc'$ID' and nombre='$NOMBRE'";

        //print $sql;
        $this->set_sql($sql);
        $rs = mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));
        //$total_de_registro = mysqli_num_rows($rs);
        $renglon= mysqli_fetch_array($rs);
        $cuantos= $renglon[0];

        return $cuantos;
    }



}
?>