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
            $sql = "INSERT INTO usuarios (";
            $sql .= "ID,";
            $sql .= "NOMBRE,";
            $sql .= "CONTRASEÑA";
            $sql .= ") ";
            $sql .= "VALUES(";
            $sql .= "'".$obj->getID()."',";
            $sql .= "'".$obj->getNOMBRE()."',";
            $sql .= "'".$obj->getCONTRASEÑA()."',";
            $sql .= ");";
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
        }//end insertar_usuario
    
        function borrar_usuario($id,$nombre){
            $id = $this->db_conn->real_escpae_string($id);
            $nombre = $this->db_conn->real_escape_string($nombre);
            $sql = "DELETE FROM usuarios WHERE ID='$id' AND NOMBRE='$nombre';";
            $this->set_sql($sql);
            $this->db_conn->set_charset("utf8");
            mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));
            if(mysqli_affected_rows($this->db_conn)==1) {
                $insertado=1;
            }else{
                $insertado=0;
            }
            return $insertado;
        }//end borrar_usuario
    
        function actualiza_usuario($obj,$id){
            $sql = "UPDATE usuarios SET ";
            $sql .= "ID=".$obj->getID();
            $sql .= " WHERE NOMBRE = '".$obj->getNOMBRE()."' AND ID='$id'";
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
        }//end actualiza_usuario
    
    
        public function existeUsuario($ID,$NOMBRE){
            $ID=$this->db_conn->real_escape_string($ID);
            $NOMBRE=$this->db_conn->real_escape_string($NOMBRE);
            $sql = "SELECT COUNT(*) FROM usuarios";
            $sql .= " WHERE ID='$ID' AND NOMBRE='$NOMBRE'";
            //print $sql;
            $this->set_sql($sql);
            $rs = mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));
            //$total_de_registro = mysqli_num_rows($rs);
            $renglon= mysqli_fetch_array($rs);
            $cuantos= $renglon[0];
            return $cuantos;
        }//end existeUsuario
    }
?>