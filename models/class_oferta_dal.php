<?php
include("class_oferta.php");
include("class_db2.php");

class oferta_dal extends class_db{

    function __construct()
    {
        parent::__construct();
    }

    function __destruct()
    {
        parent::__destruct();
    }

    function datos_por_id($id){
        $vid=$this->db_conn->real_escape_string($id);
        $sql="select * from oferta where ID=$vid";
        $this->set_sql($sql);
        $result=mysqli_query($this->db_conn,$this->db_query) or die (
            mysqli_error($this->db_conn));
        $total_ofertas=mysqli_num_rows($result);
        $obj_det=null;
        if($total_ofertas==1){
            $renglon=mysqli_fetch_assoc($result);
            $obj_det = new oferta($renglon["ID"],$renglon["NOMBRE"],$renglon["PRECIO"],$renglon["ESPACIO"],$renglon["CUENTAS"],$renglon["GARANTIA"],$renglon["NOMBRE_DOMINIO"],$renglon["VENCIMIENTO"]);
        }
        return $obj_det;
    }//end

    function obtener_lista_ofertas(){
        $sql="select * from oferta";
        $this->set_sql($sql);
        $result=mysqli_query($this->db_conn,$this->db_query) or die (
            mysqli_error($this->db_conn));
        $total_ofertas=mysqli_num_rows($result);
        $obj_det=null;
        if($total_ofertas>0){
            $i=0;
            while ($renglon= mysqli_fetch_assoc($result)){
                $obj_det = new oferta($renglon["ID"],$renglon["NOMBRE"],$renglon["PRECIO"],$renglon["ESPACIO"],$renglon["CUENTAS"],$renglon["GARANTIA"],$renglon["NOMBRE_DOMINIO"],$renglon["VENCIMIENTO"]);
                $i++;
                $lista[$i]=$obj_det;
                unset($obj_det);
            }
            return $lista;
        }

    }//end

    function existe_oferta($id){
        $vid=$this->db_conn->real_escape_string($id);
        $sql="select count(*) from oferta WHERE ID=$vid";
        $this->set_sql($sql);
        $result=mysqli_query($this->db_conn,$this->db_query) or die (
            mysqli_error($this->db_conn));
        
        $renglon=mysqli_fetch_array($result);
        $cuantos=$renglon[0];
        return $cuantos;
    }//end

    function insertar_oferta($obj){
        $sql="insert into oferta(";
        $sql.="NOMBRE,";
        $sql.="PRECIO,";
        $sql.="ESPACIO,";
        $sql.="CUENTAS,";
        $sql.="GARANTIA,";
        $sql.="NOMBRE_DOMINIO,";
        $sql.="VENCIMIENTO)";
        $sql.=" values(";
        $sql.="'".$obj->getNOMBRE()."',";
        $sql.="'".$obj->getPRECIO()."',";
        $sql.="'".$obj->getESPACIO()."',";
        $sql.="'".$obj->getCUENTAS()."',";
        $sql.="'".$obj->getGARANTIA()."',";
        $sql.="'".$obj->getNOMBRE_DOMINIO()."',";
        $sql.="'".$obj->getVENCIMIENTO()."',";
        $sql.=")";

        $this->set_sql($sql);
        $this->db_conn->set_charset("utf8");
        mysqli_query($this->db_conn,$this->db_query) or die (
            mysqli_error($this->db_conn));
        
        if(mysqli_affected_rows($this->db_conn)==1){
            $insertado=1;
        }else{
            $insertado=0;
        }

        unset($obj);
        return $insertado;
    }//end

    function borra_oferta($id){
        $vid=$this->db_conn->real_escape_string($id);
        $sql="delete from oferta WHERE ID=".$vid;
        $this->set_sql($sql);
        $result=mysqli_query($this->db_conn,$this->db_query) or die (
            mysqli_error($this->db_conn));
        if(mysqli_affected_rows($this->db_conn)==1){
            $borrado=1;
        }else{
            $borrado=0;
        }

        unset($obj);
        return $borrado;
    }//end
}
?>