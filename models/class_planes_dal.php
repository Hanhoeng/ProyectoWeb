<?php
    include("class_planes.php");
    include("class_db2.php");
    class planes_dal extends class_db{
    
    	function __construct()
    	{
    		parent::__construct();
    	}
    
    	function __destruct()
    	{
            parent::__destruct();
        
    	}

        function datos_por_id($id){
            $id=$this->db_conn->real_escape_string($id);
            $sql="SELECT * FROM planes WHERE ID='$id';";
            $this->set_sql($sql);
            $result=mysqli_query($this->db_conn,$this->db_query) or die (mysqli_error($this->db_conn));
            $total_planes=mysqli_num_rows($result);
            $obj_det=null;
            if($total_planes==1){
                $renglon=mysqli_fetch_assoc($result);
                $obj_det = new Plan($renglon["ID"],$renglon["ID_USUARIO"],$renglon["ID_OFERTA"],$renglon["FECHA_REGISTRO"]);
            }
            return $obj_det;
        }//end datos_por_id
    
                //Insertar
        function insertar_planes($obj){
            $fecha=date("Y-m-d H:i:s");
            $sql = "INSERT INTO planes (";
            $sql .= "ID,";
            $sql .= "ID_USUARIO,";
            $sql .= "ID_OFERTA";
            $sql .= "FECHA_REGISTRO";
            $sql .= ") ";
            $sql .= "values(";
            $sql .= "'".$obj->getID()."',";
            $sql .= "'".$obj->getID_USUARIO()."',";
            $sql .= "'".$obj->getID_OFERTA()."',";
            $sql .= "'".$fecha."'";
            $sql .= ")";
            $this->set_sql($sql);
            $this->db_conn->set_charset("utf8");
            mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));
            if(mysqli_affected_rows($this->db_conn)==1){
                $insertado=1;
            }else{
                $insertado=0;
            }
            unset($obj);
            return $insertado;
        }//end insertar_planes
    
        function borrar_plan($obj){        
            $sql = "DELETE FROM planes WHERE ID_OFERTA='".$obj->getID_OFERTA()."' and ID_USUARIO='".$obj->getID_USUARIO()."'";
            $this->set_sql($sql);
            $this->db_conn->set_charset("utf8");
            mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));
            if(mysqli_affected_rows($this->db_conn)==1) {
                $insertado=1;
            }else{
                $insertado=0;
            }
            return $insertado;
        }//end borrar_plan
    
        function actualiza_plan($obj,$id){
            $sql = "UPDATE planes SET ";
            $sql .= "ID=".$obj->getID();
            $sql .= " WHERE ID_USUARIO = '".$obj->getID_USUARIO()."' and ID=$id";
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
        }//end actualiza_plan
    
        function cuantosPlanes($id){ 
            $sql = "SELECT COUNT(*) FROM planes";
            $sql .= " WHERE ID='$id'";
            //print $sql;
            $this->set_sql($sql);
            $rs = mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));
            //$total_de_registro = mysqli_num_rows($rs);
            $renglon= mysqli_fetch_array($rs);
            $cuantos= $renglon[0];
            return $cuantos;
        }//end cuantosPlanes

        function obtener_lista_planes(){
            $sql="SELECT * FROM planes;";
            $this->set_sql($sql);
            $rs=mysqli_query($this->db_conn,$this->db_query) or die (mysqli_error($this->db_conn));
            $total_planes=mysqli_num_rows($rs);
            $obj_det=null;

            if($total_planes>0){
                $i=0;
                while ($renglon= mysqli_fetch_assoc($rs)){
                    $obj_det = new Plan($renglon["ID"],$renglon["ID_USUARIO"],$renglon["ID_OFERTA"],$renglon["FECHA_REGISTRO"]);
                    $i++;
                    $lista[$i]=$obj_det;
                    unset($obj_det);
                }
                return $lista;
            }
        }//end obtener_lista_planes
    }
?>