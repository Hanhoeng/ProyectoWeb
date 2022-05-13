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

            //Insertar
    function insertar_planes($obj){
        $fecha=date("Y-m-d H:i:s");
        $sql = "insert into planes (";
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

        if(mysqli_affected_rows($this->db_conn)==1) {
            $insertado=1;
        }else{
            $insertado=0;
        }
        unset($obj);
        return $insertado;
    }


        //borrar
    function borrar_plan($obj){
        
        $sql = "delete from planes where id_oferta='".$obj->getID_OFERTA()."' and id_usuario='".$obj->getID_USUARIO()."'";
     
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


    function actualiza_plan($obj,$id){

        $sql = "update planes set ";
        $sql .= "id=".$obj->getID();
        $sql .= " where ID_USUARIO = '".$obj->getID_USUARIO()."' and ID=$id";

       
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



        function cuantosPlanes($id){
        
        $sql = "select count(*) from planes";
        $sql .= " where ID='$id'";

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