<script type="text/javascript">

function insertar_destinatario_saliente() {

if(!validar_requeridos_modal_destinatario()){
    return 0;
}

var datos = $('#formTercerosDestinatariosSalientes').serialize();

ejecutarAccion(
  'administracion',
  'Terceros',
  'insertar_modal2',
  datos,
  'insertar_destinatario_saliente2(data)'
);

}

function insertar_destinatario_saliente2(data) {

if (data == 'error_documento') {
  mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
  return false;
} 
if (data == 'error_correo') {
  mensaje_alertas("error", "El Correo ya se encuentra registrado", "center");
  return false;
} 

if (data == 'error_nick') {
  mensaje_alertas("error", "El Nick de Usuario ya se encuentra registrado", "center");
  return false;
} 

mensaje_alertas("success", "Tercero registrado correctamente", "center");


var json = eval(data);  
alert(json[0].destinatario_saliente);
alert(json[0].destinatario_saliente2);
$('#destinatario_saliente').val(json[0].destinatario_saliente);
$('#destinatario_saliente2').val(json[0].destinatario_saliente2);

$("#modal_destinatarios_saliente").modal("hide");

}


</script>


<div class="modal fade" id="modal_destinatarios_saliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="modal_destinatarios_saliente2">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Crear Nuevo Destinatario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     


      <form autocomplete="on" id="formTercerosDestinatariosSalientes" method="post">



        <div class="card-body">
          <div class="row">
            <div class="col-12">
            
            
            
            

              <div class="card">


            
                    <div class="row">

                      <div class="col-md-6">
                        <label>Tipo de Documento</label>
                        <?php
                        echo $froms->Lista_Desplegable(
                          $tiposdocumento,
                          'nombre_tipodocumento',
                          'id_tipodocumento',
                          'tipodocumento_tercero_saliente',
                          '',
                          '',
                          ''
                        );
                        ?>
                      </div>

                      <div class="col-md-6">
                        <label>Documento</label>
                        <input type="text" class="form-control" id="documento_tercero_saliente" 
                        name="documento_tercero_saliente">
                      </div>

                      
                    </div>

                    <br>



                    <div class="row">

                      <div class="col-md-12">
                        <label>Nombre Tercero<span style="color:red">*</span></label>
                        <input type="text" class="form-control requerido_modal_destinatario" id="nombre_tercero_saliente" 
                        name="nombre_tercero_saliente">
                      </div>

                    </div>

                    <div class="row">
                      
                      <div class="col-md-12">
                      <br>
  
                          <label>Correo el&eacute;ctronico</label>
                          <input type="text" class="form-control" id="correo_tercero_saliente" 
                          name="correo_tercero_saliente">
                        </div>
  
                      </div>
                      
                    
                    </div>
                    
                
                  

        </div>
        </div>
          </div>


      </form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button onclick="insertar_destinatario_saliente(); return false;" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>