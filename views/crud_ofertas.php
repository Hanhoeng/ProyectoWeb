<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
	if(isset($_SESSION['user_id']) || $_SESSION['user_id'] != 0){
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/estilos2.css">	
		
	<title>The Web Hosting</title>
</head>
<body background="../css/imagenes/fondo.png">
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
<legend class="text-center header"><h2>Lista de ofertas registradas</h2></legend>
</div>

<?php  
include("../models/class_oferta_dal.php");
$obj_dato_catalogo_oferta=new oferta_dal;

$result_dato_catalogo_oferta=$obj_dato_catalogo_oferta->obtener_lista_ofertas();

    if ($result_dato_catalogo_oferta==NULL){

            print "<p>No se encontraron resultados de ofertas</p>";
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
                         <input name="add" id="add" type="submit" href="../views/agregar_oferta.php" class="btn btn-primary" value="Agregar Oferta"></div>
                     </div> 


<table id="lista_oferta" class="table table-striped table-bordered" border="0">

                                <thead class="text-capitalize">
                                                <tr>
                                                       <th>ID</th>
                                                       <th>NOMBRE</th>
                                                       <th>PRECIO</th>
										     <th>ESPACIO</th>
										     <th>CUENTAS</th>
										     <th>GARANTIA</th>
										     <th>NOMBRE_DOMINIO</th>
										     <th>VENCIMIENTO</th>
                                                       <th>ACTUALIZAR</th> 
                                                       <th>VER</th> 
                                                       <th>ELIMINAR</th>
                                                </tr>
                                </thead>
                                <tbody>
                                <?php
    						foreach ($result_dato_catalogo_oferta as $key => $value) {
		?>
    						<tr>
								<td><?=$value->getID();?></td>
                                <td><?=$value->getNOMBRE();?></td>
                                <td><?=$value->getPRECIO();?></td>
                                <td><?=$value->getESPACIO();?></td>
                                <td><?=$value->getCUENTAS();?></td>
                                <td><?=$value->getGARANTIA();?></td>
                                <td><?=$value->getNOMBRE_DOMINIO();?></td>
                                <td><?=$value->getVENCIMIENTO();?></td>
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
    if ($('#lista_oferta').length) {
        //$('#lista_usuarios').DataTable();

$('#lista_oferta').DataTable( {
        
dom: 'Blfrtip',
        buttons: [{
            extend: 'excelHtml5',
                messageTop: 'OFERTAS',
                text:"Exporta Excel",
                title:"Listado de ofertas",
        },
        {
            /*'csvHtml5',*/
                extend: 'csvHtml5',
                text:"Exporta csv",
                title:"Listado de ofertas",
                messageTop: 'ofertas',
              },
                          {
                extend: 'pdfHtml5',
                title: 'Listado de ofertas'
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
            $("h4.modal-title").text("Agregado de Oferta");
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
                    url:"../controller/controller_inserta_actualiza_ofertas.php",  
                    method:"POST",  
                    data:$('#insert_form').serialize(),  
                    beforeSend:function(){ 
                           if($('#oferta_id').val() == ''){ 
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
                          title: "Registro de Ofertas",
                          text: "Oferta Ingresado Correctamente!",
                          type: "success"
                          }).then(function() {
                            window.location = "crud_ofertas.php";
                          });

                      }
                          else{
                            Swal.fire({
                                    type: 'error',
                                    title: 'No se agregó correctamente la oferta, vuelva a intentar.',
                        });
                          }  
                     }  
                });  
           }  
      })
 

    $('#lista_oferta tbody').on('click', '.delete', function() {
       
    var el = this;
  
    // Delete id
    var deleteid = $(this).data('id');
 
    // Confirm box
    bootbox.confirm("¿Deseas realmente borrar el registro?", function(result) {
 
     if(result){
     // AJAX Request
     $.ajax({
          url: '../controller/controller_delete_ofertas.php',
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


$('#lista_oferta tbody').on('click', '.ver', function() {
         $("h4.modal-title").text("Detalle de Oferta");
    // ver id
    var oferta_id = $(this).data('id');
    //alert(usuario_id);
    
          if(oferta_id != '')  
           {  
                $.ajax({  
                     url:'../controller/controller_select_ofertas.php',  
                     method:'POST',  
                     data:{id:ofertas_id},  
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
$('#lista_oferta tbody').on('click', '.update', function() {
    $("h4.modal-title").text("Modificación de Oferta");
    var oferta_id = $(this).data('id');
               $.ajax({  
                url:"../controller/controller_fetch_ofertas.php",  
                method:"POST",  
                data:{id:ofertas_id},  
                dataType:"json",  
                success:function(data){
                //alert(JSON.stringify(data));

                     $('#oferta_id').val(data.ID); 
                     $('#f_nombre').val(data.nombre);  
                     $('#f_precio').val(data.precio);     
                     $('#f_espacio').val(data.espacio);     
                     $('#f_cuentas').val(data.cuentas);     
                     $('#f_garantia').val(data.garantia);     
                     $('#f_nombre_dominio').val(data.nombre_dominio);     
                     $('#f_vencimiento').val(data.vencimiento);          
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
                          <label>Id Oferta: </label> 
                          <br />
                          <label>Nombre:</label>
                          <input type="text" name="f_nombre" id="f_nombre" class="form-control" />  
                          <br /> 
                          <label>Precio:</label>
                          <input type="text" name="f_precio" id="f_precio" class="form-control" />  
                          <br />   
                          <label>Espacio:</label>
                          <input type="text" name="f_espacio" id="f_espacio" class="form-control" />  
                          <br />   
                          <label>Cuentas:</label>
                          <input type="text" name="f_cuentas" id="f_cuentas" class="form-control" />  
                          <br />   
                          <label>Garantia:</label>
                          <input type="text" name="f_garantia" id="f_garantia" class="form-control" />  
                          <br />   
                          <label>Nombre de dominio:</label>
                          <input type="text" name="f_nombre_dominio" id="f_nombre_dominio" class="form-control" />  
                          <br />   
                          <label>Vencimiento:</label>
                          <input type="text" name="f_vencimiento" id="f_vencimiento" class="form-control" />  
                          <br />
                          <input type="hidden" name="oferta_id" id="usuario_id" readonly="true" />  
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