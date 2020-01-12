<script type="text/javascript">

  function editar_tipodocumental() {

    if(!validar_requeridos()){
        return 0;
    }

    var datos = $('#formTiposdocumentales').serialize();

    ejecutarAccion(
      'administracion',
      'Tiposdocumentales',
      'guardar',
      datos,
      'editar_tipodocumental2(data)'
    );

  }

  function editar_tipodocumental2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Tipodocumental Editado Exitosamente", "center");
      cargar_tiposdocumentales();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
  

  function cargar_subseries() {

    ejecutarAccion(
      'administracion',
      'Tiposdocumentales',
      'cargarSubseries',
      'id_serie='+$('#serie_tipodocumental').val(),
      "$('#div_subseries').html(data);"
    );

  }


</script>


<?php
$froms = new Formularios();
?>

<form id="formTiposdocumentales" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Tipo Documental</h3>
            </div>

            <form role="form">

              <input type="hidden" class="form-control" id="id_tipodocumental" name="id_tipodocumental" 
                        value="<?php echo $datos['id_tipodocumental']; ?>">

              <div class="card-body">


              
            <div class="form-group">
 
 <label>Serie Documental<span style="color:red">*</span></label>
 <?php
 echo $froms->Lista_Desplegable(
         $series,
         'nombre_serie',
         'id_serie',
         'serie_tipodocumental',
         $datos['serie_tipodocumental'],
         '',
         'cargar_subseries()'
     );
 ?>

</div>


<div class="form-group">

 <label>SubSerie Documental<span style="color:red">*</span></label>
 <div id="div_subseries">
 <?php
 echo $froms->Lista_Desplegable(
         $subseries,
         'nombre_subserie',
         'id_subserie',
         'subserie_tipodocumental',
         $datos['subserie_tipodocumental'],
         '',
         ''
     );
 ?>

</div>
</div>



                <div class="form-group">
                  <label>Tipo Documental<span style="color:red">*</span></label>

                  <input type="text" class="form-control requerido" id="nombre_tipodocumental" name="nombre_tipodocumental" 
                        value="<?php echo $datos['nombre_tipodocumental']; ?>">
                </div>
              </div>

              <div class="card-footer">
                <button onclick="cargar_tiposdocumentales();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_tipodocumental(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>