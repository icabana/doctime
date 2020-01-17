<script type="text/javascript">

  function insertar_tipodocumental() {

      if(!validar_requeridos()){
          return 0;
      }

      var datos = $('#formTiposdocumentales').serialize();
alert(datos);
      ejecutarAccion(
        'administracion',
        'Tiposdocumentales',
        'insertar',
        datos,
        'insertar_tipodocumental2(data)'
      );

  }

  function insertar_tipodocumental2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Tipodocumental Registrado Exitosamente", "center");
        cargar_tiposdocumentales();
      } else {
        mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
      }

  }

  
  function cargar_subseries777() {

    ejecutarAccion(
      'administracion',
      'Tiposdocumentales',
      'cargarSubseries777',
      'id_serie='+$('#serie_tipodocumental').val(),
      "$('#div_subseries').html(data);"
    );

}


</script>


<?php
    $froms = new Formularios();
?>


<div class="box box-default">

  <div class="box-body">

    <div class="row">
      <div class="col-md-3"></div>
      <div style="padding: 25px" class="col-md-6">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Registrar Tipo Documental</h3>
          </div>

          <form autocomplete="on" id="formTiposdocumentales" method="post">

            <div class="card-body">


            <div class="form-group">
 
                <label>Serie Documental<span style="color:red">*</span></label>
                <?php
                echo $froms->Lista_Desplegable(
                        $series,
                        'nombre_serie',
                        'id_serie',
                        'serie_tipodocumental',
                        '',
                        '',
                        'cargar_subseries777()'
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
                            'subserie_tipodocumental777',
                            '',
                            '',
                            ''
                        );
                    ?>
                </div>
              </div>
              

              <div class="form-group">
                <label>Tipo Documental<span style="color:red">*</span></label>
                <input type="text" class="form-control requerido" id="nombre_tipodocumental" name="nombre_tipodocumental">
              </div>



            </div>

            <div class="card-footer">
              <button onclick="cargar_tiposdocumentales();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_tipodocumental(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>