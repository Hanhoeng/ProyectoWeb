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

        //Usuario por id
        function usuario_por_id($id){
            $id=$this->db_conn->real_escape_string($id);
            $sql="SELECT * FROM usuarios WHERE ID='$id'";
            $this->set_sql($sql);
            $result=mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));
            $total_USUARIOS=mysqli_num_rows($result);
            $obj_det=null;
            if($total_USUARIOS==1){
                $renglon=mysqli_fetch_assoc($result);
                $obj_det= new usuarios($renglon["ID"],utf8_encode($renglon["NOMBRE"]),utf8_encode($renglon["CONTRASEÑA"]),utf8_encode($renglon["IS_ADMIN"]));
            }//end if
            return $obj_det;
        }
    
            //Insertar
        function insertar_usuario($obj){
            $sql = "INSERT INTO usuarios (";
            $sql .= "NOMBRE,";
            $sql .= "CONTRASEÑA,";
            $sql .= "IS_ADMIN";
            $sql .= ") ";
            $sql .= " VALUES(";
            $sql .= "'".$obj->getNOMBRE()."', ";
            $sql .= "'".$obj->getCONTRASEÑA()."',";
            $sql .= "'".$obj->getIS_ADMIN()."'";
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
    
        function borrar_usuario($id){
            $id = $this->db_conn->real_escape_string($id);
            $sql = "DELETE FROM usuarios WHERE ID='$id'";
            $this->set_sql($sql);
            mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));
            if(mysqli_affected_rows($this->db_conn)==1) {
                $borrado=1;
            }else{
                $borrado=0;
            }
            return $borrado;
        }//end borrar_usuario
    
        function actualiza_usuario($obj){
            $sql = "UPDATE usuarios SET ";
            $sql .= "NOMBRE=".$obj->getNOMBRE()."'";
            $sql .= " WHERE ID = '".$obj->getID()."'";
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

        function obtener_lista_usuarios(){
            $sql="SELECT * FROM usuarios";
            $this->set_sql($sql);
            $rs=mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));
            $total_USUARIOS=mysqli_num_rows($rs);
            $obj_det=null;

            if($total_USUARIOS>0){
                $i=0;
                while($renglon = mysqli_fetch_assoc($rs)){
                    $obj_det= new usuarios($renglon["ID"],utf8_encode($renglon["NOMBRE"]),utf8_encode($renglon["CONTRASEÑA"]));
                    $i++;
                    $lista[$i]=$obj_det;
                    unset($obj_det);
                }//end while
                return $lista;
            }//end if
        }//end obtener_lista_USUARIOS

        public function is_correct($user, $pass){
            $user=$this->db_conn->real_escape_string($user);
            $pass=$this->db_conn->real_escape_string($pass);
            $sql = "SELECT IS_ADMIN FROM usuarios";
            $sql.= " WHERE NOMBRE='$user'";
            $sql.= " AND CONTRASEÑA='$pass'";
            $this->set_sql($sql);
            $rs = mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));
            $total_user = mysqli_num_rows($rs);
            if($total_user==1){
                $renglon = mysqli_fetch_array($rs);
                $cuantos=$renglon[0];
                return $cuantos;
            }else{
                return "0";
            }
        }
    }
?>