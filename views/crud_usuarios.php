<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/estilos2.css">	
		
	<title>The Web Hosting</title>
</head>
<body background="../css/imagenes/fondo.png">
<section id="contenedor">
<a id="ver" href="#">

<picture>
<header>
<a href="index.php"><img id="logo" src="./../css/imagenes/logo (1).png"></a>
<a href="compañia.php"><img id="compañia" src="../css/imagenes/compañia.png"></a>
<a href="servicios.php"><img id="servicios" src="../css/imagenes/servicios.png"></a>
<a href="soluciones.php"><img id="soluciones" src="../css/imagenes/soluciones.png"></a>
<a href="clientes.php"><img id="clientes" src="../css/imagenes/clientes.png"> </a>
<a href="contacto.php"><img id="contacto" src="../css/imagenes/contacto.png"></a> 	
</header>
</picture>

<br><br><br>

<div class="container-fluid">
    <div class="row">
        <?php
        include_once "inclusiones/menu_horizontal_superior.php";
        ?>
    </div>
</div>


<!--<div class="container-fluid">  -->
<div class="container" style="margin-top: 65px !important;">  
<div class="form-group">
<legend class="text-center header"><h2>Lista de cursos para capacitación</h2></legend>
</div>
</body>


</body>
</html>
<?php  
include("models/class_usuarios_dal.php");
$obj_dato_catalogo_cursos=new usuarios_dal;

$result_dato_catalogo_cursos=$obj_dato_catalogo_cursos->list_usuarios();

    if ($result_dato_catalogo_cursos==NULL){

            print "<p>No se encontraron resultados de cursos</p>";
        }
        else{
/*
            print '<pre>';
            print_r($result_dato_catalogo_cursos);
            print '</pre>';
            return;
            */
?> 
<!--<table id="lista_cursos" class="table table-striped table-bordered text-center" border="0">-->
<div class="form-group col-md-12">

                    <div align="center">  
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-primary">Agregar Curso</button>  
                     </div> 


<table id="lista_cursos" class="table table-striped table-bordered" border="0">

							<thead class="text-capitalize">
                                            <tr>
                                                <th># Curso</th>
                                                <th>Nombre del Curso</th>
                                                <th>Actualizar</th>
                                                <th>Ver</th> 
                                                <th>Eliminar</th>

                                            </tr>
                             </thead>
                            <tbody>
		<?php
    						foreach ($result_dato_catalogo_cursos as $key => $value) {
		?>
    						<tr>
								<td><?=$value->getIdCurso();?></td>
								<td><?=($value->getNombreCurso());?></td>
<td>
<button class='update btn btn-success btn-sm' id='update_<?= $value->getIdCurso() ?>' data-id='<?= $value->getIdCurso() ?>' >Actualizar</button>
</td>

<td>
<button class='ver btn btn-warning btn-sm' id='ver_<?= $value->getIdCurso() ?>' data-id='<?= $value->getIdCurso() ?>' >Ver</button></td>

<td>
<button class='delete btn btn-danger btn-sm' id='del_<?= $value->getIdCurso() ?>' data-id='<?= $value->getIdCurso() ?>' >Eliminar</button>
</td>

    						</tr>
        <?php
        }//cierre de foreach lista de personas
         ?>
                            </tbody>                             

</table>
</div>


<?php

        }

?>

<?php include_once "inclusiones/js_incluidos.php"; ?>

</div><!-- end container -->  

<script>
 $(document).ready(function() {
 

    if ($('#lista_cursos').length) {
        //$('#lista_cursos').DataTable();

$('#lista_cursos').DataTable( {
        
dom: 'Blfrtip',
        buttons: [{
            extend: 'excelHtml5',
                messageTop: 'Direccion De Ecología',
                text:"Exporta Excel",
                title:"Listado de cursos",
        },
        {
            /*'csvHtml5',*/
                extend: 'csvHtml5',
                text:"Exporta csv",
                title:"Listado de cursos",
                messageTop: 'Direccion De Ecología',
              },
                          {
                extend: 'pdfHtml5',
                title: 'Listado de cursos'
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
            $("h4.modal-title").text("Agregado de Curso");
            $('#insert').val("Insert");  
            $('#insert_form')[0].reset();  
      });


      $('#insert_form').on("submit", function(event,table){
          
           event.preventDefault();  
           if($('#f_nombre').val() == '')  
           {  
                //bootbox.alert('Error:Nombre curso es requerido');
                Swal.fire({
           type: 'warning',
           title: 'Error',
           text: 'Error:Nombre curso es requerido'});  
           }  
           else  
           {  
                $.ajax({  
                     url:"inserta_actualiza_cursos.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){ 
                            if($('#curso_id').val() == ''){ 
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
                          title: "Registro de Cursos",
                          text: "¡Curso Ingresado Correctamente!",
                          type: "success"
                          }).then(function() {
                            window.location = "catalogo_cursos.php";
                          });

                      }
                          else{
                            Swal.fire({
                                    type: 'error',
                                    title: 'No se agregó correctamente curso, vuelva a intentar.',
                        });
                          }  
                     }  
                });  
           }  
      })
 

    $('#lista_cursos tbody').on('click', '.delete', function() {
       
    var el = this;
  
    // Delete id
    var deleteid = $(this).data('id');
 
    // Confirm box
    bootbox.confirm("¿Deseas realmente borrar el registro?", function(result) {
 
       if(result){
         // AJAX Request
         $.ajax({
           url: 'delete_cursos.php',
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


$('#lista_cursos tbody').on('click', '.ver', function() {
         $("h4.modal-title").text("Detalle de Curso");
    // ver id
    var curso_id = $(this).data('id');
    //alert(curso_id);
    
          if(curso_id != '')  
           {  
                $.ajax({  
                     url:'select_cursos.php',  
                     method:'POST',  
                     data:{id:curso_id},  
                     success:function(response){
                            //alert(response);  
                          $('#employee_detail').html(response);  
                          $('#dataModal').modal('show');  
                     },
                    error : function(request, status, error) {

                            var val = request.responseText;
                            alert("error"+val);
                    }  
                });  
           }                  

});


/*updTAE*/
$('#lista_cursos tbody').on('click', '.update', function() {
    $("h4.modal-title").text("Modificación de Curso");
    var curso_id = $(this).data('id');
               $.ajax({  
                url:"fetch_curso.php",  
                method:"POST",  
                data:{curso_id:curso_id},  
                dataType:"json",  
                success:function(data){
                //alert(JSON.stringify(data));

                     
                     $('#f_nombre').val(data.nombre_curso);  
                     $('#curso_id').val(data.IDCurso);  
                     $('#insert').val("Actualizar");  
                     $('#add_data_Modal').modal('show'); 
                      
                },
                    error : function(request, status, error) {

                            var val = request.responseText;
                            alert("error"+val);
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
                     <h4 class="modal-title">Detalles de Curso</h4>
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
                          <label>Nombre de Curso:</label>
                          <input type="text" name="f_nombre" id="f_nombre" class="form-control" />  
                          <br />  
                          <input type="hidden" name="curso_id" id="curso_id" readonly="true" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>