<?php
    include("class_sugerencias.php");
    include("class_db2php");
    
    class sugerencias_dal extends class_db{
    
        function __construct()
        {
            parent::__construct();
        }
    
        function __destruct()
        {
            parent::__destruct();
        }
    
        function datos_por_id($id){
            $Vid=$this->db_conn->real_escape_string($id);
            $sql="SELECT * FROM sugerencias WHERE ID=$id";
            $this->set_sql($sql);
            $result=mysqli_query($this->db_conn,$this->db_query) or die (mysqli_error($this->db_conn));
            $total_sugerencias=mysqli_num_rows($result);
            $obj_det=null;
            if($total_sugerencias==1){
                $renglon=mysqli_fetch_assoc($result);
                $obj_det = new sugerencias($renglon["ID"],$renglon["NOMBRE"],$renglon["CORREO"],$renglon["SUGERENCIA"]);
            }
            return $obj_det;
        }//end datos_por_id
    
        function obtener_lista_sugerencias(){
            $sql="SELECT * FROM sugerencias";
            $this->set_sql($sql);
            $rs=mysqli_query($this->db_conn,$this->db_query) or die (mysqli_error($this->db_conn));
            $total_sugerencias=mysqli_num_rows($rs);
            $obj_det=null;
            if($total_sugerencias>0){
                $i=0;
                while ($renglon= mysqli_fetch_assoc($rs)){
                    $obj_det = new sugerencias($renglon["ID"],$renglon["NOMBRE"],$renglon["CORREO"],$renglon["SUGERENCIA"]);
                    $i++;
                    $lista[$i]=$obj_det;
                    unset($obj_det);
                }
                return $lista;
            }
        }//end obtener_lista_sugerencias
    
        function existe_sugerencia($id){
            $id=$this->db_conn->real_escape_string($id);
            $sql="SELECT COUNT(*) FROM sugerencias WHERE ID=$id";
            $this->set_sql($sql);
            $rs=mysqli_query($this->db_conn,$this->db_query) or die (mysqli_error($this->db_conn));
            
            $renglon=mysqli_fetch_array($rs);
            $cuantos=$renglon[0];
            return $cuantos;
        }//end existe_sugerencia
    
        function insertar_sugerencia($obj){
            $sql="INSERT INTO sugerencias(";
            $sql.="NOMBRE,";
            $sql.="CORREO,";
            $sql.="SUGERENCIA)";
            $sql.=" VALUES(";
            $sql.="'".$obj->getNOMBRE()."',";
            $sql.="'".$obj->getCORREO()."',";
            $sql.="'".$obj->getSUGERENCIA()."',";
            $sql.=");";
            $this->set_sql($sql);
            $this->db_conn->set_charset("utf8");
            mysqli_query($this->db_conn,$this->db_query) or die (mysqli_error($this->db_conn));
            if(mysqli_affected_rows($this->db_conn)==1){
                $insertado=1;
            }else{
                $insertado=0;
            }
            unset($obj);
            return $insertado;
        }//end insertar_sugerencia
    
        function borra_sugerencia($id){
            $id=$this->db_conn->real_escape_string($id);
            $sql="DELETE FROM sugerencias WHERE ID='$id'";
            $this->set_sql($sql);
            $result=mysqli_query($this->db_conn,$this->db_query) or die (
                mysqli_error($this->db_conn));
            if(mysqli_affected_rows($this->db_conn)==1){
                $borrado=1;
            }else{
                $borrado=0;
            }
            return $borrado;
        }//end borra_sugerencia
    
        function actualiza_sugerencia($obj){
            $id=$this->db_conn->real_escape_string($obj->getID());
            $sql="UPDATE sugerencias SET";
            $sql.=" NOMBRE='".$obj->getNOMBRE()."'";
            $sql.="WHERE ID=".$id;
            $this->set_sql($sql);
            $this->db_conn->set_charset("utf8");
            mysqli_query($this->db_conn,$this->db_query) or die (mysqli_error($this->db_conn));
            if(mysqli_affected_rows($this->db_conn)==1){
                $actualizado=1;
            }else{
                $actualizado=0;
            }
            unset($obj);
            return $actualizado;
        }//end actualiza_sugerencia
    }
?>