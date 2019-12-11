<script type="text/javascript">
  function editar_subserie() {

    
    if(!validar_requeridos()){
            return 0;
    }


    var datos = $('#formSubseries').serialize();

    ejecutarAccion(
      'administracion',
      'Subseries',
      'guardar',
      datos,
      'editar_subserie2(data)'
    );

  }

  function editar_subserie2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Subserie Editado Exitosamente", "center");
      cargar_subseries();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>


<div class="box box-default">

  <div class="box-body">

    <div class="row">
      <div class="col-md-1"></div>
      <div style="padding: 25px" class="col-md-10">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Registrar Subserie</h3>
          </div>

          <form autocomplete="on" id="formSubseries" method="post">

          <input type="hidden" id="id_subserie" name="id_subserie"
                value="<?php echo $datos['id_subserie']; ?>">

          <div class="card-body">
          
          
            <div class="row">

              <div class="col-md-6">
                <label>C&oacute;digo de la Subserie<span style="color:red">*</span></label>
                <input type="text" class="form-control requerido" id="codigo_subserie" name="codigo_subserie"
                value="<?php echo utf8_encode($datos['codigo_subserie']); ?>">
              </div>

              <div class="col-md-6">
                <label>Nombre del Subserie<span style="color:red">*</span></label>
                <input type="text" class="form-control requerido" id="nombre_subserie" name="nombre_subserie"
                value="<?php echo utf8_encode($datos['nombre_subserie']); ?>">
              </div>
              </div>

              <br>

              <div class="row">
              <div class="col-md-3">
                <label>Años Archivo Gestion</label>
                <input type="text" class="form-control" id="tiempogestion_subserie" name="tiempogestion_subserie"
                value="<?php echo $datos['tiempogestion_subserie']; ?>">
              </div>

              <div class="col-md-3">
                <label>Años Archivo Central</label>
                <input type="text" class="form-control" id="tiempocentral_subserie" name="tiempocentral_subserie"
                value="<?php echo $datos['tiempocentral_subserie']; ?>">
              </div>
              
              <div class="col-md-6">
                <label>Serie Documental<span style="color:red">*</span></label>
                <?php
                echo $froms->Lista_Desplegable(
                        $series,
                        'nombre_serie',
                        'id_serie',
                        'serie_subserie',
                        $datos['serie_subserie'],
                        
                        '',
                        ''
                    );
                ?>

              </div>
              </div>

              <br>

              <div class="row">
              <div class="col-md-5">
                <label>Soporte<span style="color:red">*</span></label>
                <?php
                echo $froms->Lista_Desplegable(
                        $soportes,
                        'nombre_soporte',
                        'id_soporte',
                        'soporte_subserie',
                        $datos['soporte_subserie'],
                        '',
                        ''
                    );
                ?>

              </div>


              <div class="col-md-5">
                <label>Disposici&oacute;n Final<span style="color:red">*</span></label>
                <?php
                echo $froms->Lista_Desplegable(
                        $disposiciones,
                        'nombre_disposicion',
                        'id_disposicion',
                        'disposicion_subserie',
                        $datos['disposicion_subserie'],
                        '',
                        ''
                    );
                ?>

              </div>
              </div>


              
            </div>

            <div class="card-footer">
              <button onclick="cargar_subseries();" class="btn btn-danger">Cancelar</button>
              <button onclick="editar_subserie(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>