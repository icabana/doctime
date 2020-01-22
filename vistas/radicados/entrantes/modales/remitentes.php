<script type="text/javascript">

function insertar_remitente_entrante() {

if(!validar_requeridos_modal_remitente()){
    return 0;
}

var datos = $('#formTercerosRemitentes').serialize();

ejecutarAccion(
  'administracion',
  'Terceros',
  'insertar_modal',
  datos,
  'insertar_remitente_entrante2(data)'
);

}

function insertar_remitente_entrante2(data) {

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

$('#remitente_entrante').val(json[0].remitente_entrante);
$('#remitente_entrante2').val(json[0].remitente_entrante2);

$("#modal_remitentes").modal("hide");

}


</script>


<div class="modal fade" id="modal_remitentes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="modal_remitentes2">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Crear Nuevo Remitente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     


      <form autocomplete="on" id="formTercerosRemitentes" method="post">



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
                          'tipodocumento_tercero_entrante',
                          '',
                          '',
                          ''
                        );
                        ?>
                      </div>

                      <div class="col-md-6">
                        <label>Documento</label>
                        <input type="text" class="form-control " id="documento_tercero_entrante" 
                        name="documento_tercero_entrante">
                      </div>

                      
                    </div>

                    <br>



                    <div class="row">

                      <div class="col-md-12">
                        <label>Nombre Tercero<span style="color:red">*</span></label>
                        <input type="text" class="form-control requerido_modal_remitente" id="nombre_tercero_entrante" 
                        name="nombre_tercero_entrante">
                      </div>

                    </div>

                    <div class="row">
                      
                      <div class="col-md-12">
                      <br>
  
                          <label>Correo el&eacute;ctronico</label>
                          <input type="text" class="form-control " id="correo_tercero_entrante" 
                          name="correo_tercero_entrante">
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
        <button onclick="insertar_remitente_entrante(); return false;" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>