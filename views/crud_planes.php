<?php
	session_start();
     if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != 0){

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php include_once "../inclusiones/meta_tags.php"; ?>
	<link rel="stylesheet" href="../css/estilos2.css">	
	<?php include_once "../inclusiones/css.php"; ?>
    <title>The Web Hosting</title>
</head>
<body background="../css/imagenes/fondo.png">
<section id="contenedor">
<a id="ver" href="#">
<div class="container-fluid">
    <div class="row">
        <?php
        include_once "../inclusiones/menu_horizontal_superior.php";
        ?>
    </div>
</div>

<!--<div class="container-fluid">  -->
<div class="container" style="margin-top: 65px !important;">  
<div class="form-group">
<legend class="text-center header"><h2>Lista de usuarios registrados</h2></legend>
</div>

<?php  
include("../models/class_planes_dal.php");
$obj_dato_catalogo_planes=new planes_dal;

$result_dato_catalogo_planes=$obj_dato_catalogo_planes->obtener_lista_planes();

    if ($result_dato_catalogo_planes==NULL){

            print "<p>No se encontraron resultados de planes</p>";
        }
        else{
/*
            print '<pre>';
            print_r($result_dato_catalogo_usuarios);
            print '</pre>';
            return;
            */
?> 
<!--<table id="lista_usuarios" class="table table-striped table-bordered text-center" border="0">-->
<div class="form-group col-md-12">

                    <div align="center">  
                    <a href="agregar_planes.php"><button name="add" id="add" class="btn btn-primary"> Agregar Planes</button></a></div>
                     </div> 


<table id="lista_usuarios" class="table table-striped table-bordered" border="0">

                                <thead class="text-capitalize">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>ID_USUARIO</th>
                                                    <th>ID_OFERTA</th>
                                                    <th>FECHA_REGISTRO</th>
                                                    <th>ACTUALIZAR</th> 
                                                    <th>VER</th> 
                                                    <th>ELIMINAR</th>

                                                </tr>
                                </thead>
                                <tbody>
                                <?php
    						foreach ($result_dato_catalogo_planes as $key => $value) {
		?>
    						<tr>
						     <td><?=$value->getID();?></td>
                                   <td><?=$value->getID_USUARIO();?></td>
                                   <td><?=$value->getID_OFERTA();?></td>
							<td><?=$value->getFECHA_REGISTRO();?></td>
<td>
<button data-toggle="modal" data-target="#add_data_Modal" class='update btn btn-success btn-sm'  id='update_<?= $value->getID(); ?>' data-id='<?= $value->getID(); ?>' >Actualizar</button>
</td>

<td>
<button class='ver btn btn-warning btn-sm' id='ver_<?= $value->getID(); ?>' data-id='<?= $value->getID(); ?>' >Ver</button></td>

<td>
<button class='delete btn btn-danger btn-sm' id='del_<?= $value->getID(); ?>' data-id='<?= $value->getID(); ?>' >Eliminar</button>
</td>

    						</tr>
        <?php
        }//cierre de foreach lista de personas
         ?>
                            </tbody>                             

</table>
</div>


<?php include_once "../inclusiones/js_incluidos.php"; ?>

</div><!-- end container -->  

<script>
 $(document).ready(function() {
    if ($('#lista_planes').length) {
        //$('#lista_usuarios').DataTable();

$('#lista_planes').DataTable( {
        
dom: 'Blfrtip',
        buttons: [{
            extend: 'excelHtml5',
                messageTop: 'PLANES',
                text:"Exporta Excel",
                title:"Listado de planes",
        },
        {
            /*'csvHtml5',*/
                extend: 'csvHtml5',
                text:"Exporta csv",
                title:"Listado de planes",
                messageTop: 'Planes',
              },
                          {
                extend: 'pdfHtml5',
                title: 'Listado de planes'
            }
        ],
    responsive: true,
    "language": {
    "search": "Filtro de Registros:",
    "sLengthMenu": "Mostrar _MENU_ registros",
    "sInfo": "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
    "oPaginate": {
        "sPrevious": "Anterior",
        "sNext": "Siguiente"
      }
  }  

    });

    }



$('#add').click(function(){  
            $("h4.modal-title").text("Agregado de Plnes");
            $('#insert').val("Insert");  
            $('#insert_form')[0].reset();  
      });


      $('#insert_form').on("submit", function(event,table){
          
          event.preventDefault();  
          if($('#f_nombre').val() == '')  
          {  
               //bootbox.alert('Error:Nombre usuario es requerido');
               Swal.fire({
          type: 'warning',
          title: 'Error',
          text: 'Error: Nombre es requerido'});  
          }  
          else  
          {  
               $.ajax({  
                    url:"../controller/controller_inserta_actualiza_planes.php",  
                    method:"POST",  
                    data:$('#insert_form').serialize(),  
                    beforeSend:function(){ 
                           if($('#plan_id').val() == ''){ 
                             $('#insert').val("Insertando");
                           }
                           else{
                             $('#insert').val("Actualizando");
                           }  
                    },     
                    success:function(data){ 
                           //alert(data); 
                         if (data=='ok'){
                         $('#insert_form')[0].reset();  
                         $('#add_data_Modal').modal('hide');
                         
                          //bootbox.alert('correcto!');
                          Swal.fire({
                          title: "Registro de Planes",
                          text: "¡Plan Ingresado Correctamente!",
                          type: "success"
                          }).then(function() {
                            window.location = "crud_planes.php";
                          });

                      }
                          else{
                            Swal.fire({
                                    type: 'error',
                                    title: 'No se agregó correctamente el plan, vuelva a intentar.',
                        });
                          }  
                     }  
                });  
           }  
      })
 

    $('#lista_planes tbody').on('click', '.delete', function() {
       
    var el = this;
  
    // Delete id
    var deleteid = $(this).data('id');
 
    // Confirm box
    bootbox.confirm("¿Deseas realmente borrar el registro?", function(result) {
 
     if(result){
     // AJAX Request
     $.ajax({
          url: '../controller/controller_delete_planes.php',
          type: 'POST',
          data: { id:deleteid },
          success: function(response){
          //alert(response);
          // remueve el registro tambien del datatable
          if(response == 1){
               $(el).closest('tr').css('background','tomato');
               $(el).closest('tr').fadeOut(800,function(){
               $(this).remove();
     });
     }else{
               bootbox.alert('Registro No Fue Eliminado.');
     }
          }
     });
     }

     });
});


$('#lista_planes tbody').on('click', '.ver', function() {
         $("h4.modal-title").text("Detalle de Plan");
    // ver id
    var plan_id = $(this).data('id');
    //alert(usuario_id);
    
          if(plan_id != '')  
           {  
                $.ajax({  
                     url:'../controller/controller_select_planes.php',  
                     method:'POST',  
                     data:{id:usuario_id},  
                     success:function(response){
                            //alert(response);  
                          $('#employee_detail').html(response);  
                          $('#dataModal').modal('show');  
                     },
                    error : function(request, status, error) {

                            var val = request.responseText;
                            alert("error "+val);
                    }  
                });  
           }                  

});


/*update*/
$('#lista_planes tbody').on('click', '.update', function() {
    $("h4.modal-title").text("Modificación de Planes");
    var usuario_id = $(this).data('id');
               $.ajax({  
                url:"../controller/controller_fetch_planes.php",  
                method:"POST",  
                data:{id:plan_id},  
                dataType:"json",  
                success:function(data){
                //alert(JSON.stringify(data));
                     $('#plan_id').val(data.ID); 
                     $('#usuario_id').val(data.usuario_id);  
                     $('#oferta_id').val(data.oferta_id);
                     $('#f_fecha_registro').val(data.fecha_registro);
					 $('#f_sugerencia').val(data.sugerencia);      
                     $('#insert').val("Actualizar");  
                     $('#add_data_Modal').modal('show'); 
                      
                },
                    error : function(request, status, error) {

                            var val = request.responseText;
                            alert("error "+val);
                    }    
           });
 
});// end function update

 });//ready function
 </script>

</body>
</html>


<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <legend class="text-center header">
                     <h4 class="modal-title">Detalles de Oferta</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </legend>  
                       
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer"> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                </div>  
           </div>  
      </div>  
 </div>


<!-- modal para insertar y update -->
  <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">
                <legend class="text-center header">
                     <h4 class="modal-title"></h4>
                     </legend>  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                       
                     </div>  
                <div class="modal-body">  
                <form method="post" id="insert_form">
                          <label>Id Plan: </label> 
                          <br />
                          <label>Id usuario:</label>
                          <input type="text" name="usuario_id" id="usuario_id" class="form-control" />  
                          <br /> 
                          <label>Id oferta:</label>
                          <input type="text" name="f_oferta" id="f_oferta" class="form-control" />  
                          <br />   
                          <label>Fecha de registro:</label>
                          <input type="text" name="f_fecha_registro" id="f_fecha_registro" class="form-control" />  
                          <br />   
                          <input type="hidden" name="plan_id" id="plan_id" readonly="true" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form> 
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
      </div>
 
 <?php
 
 }
 
 ?>
<?php
	}
	else{
		echo "<h1>GO AWAY HACKER</p>";
          exit;
	}
?>