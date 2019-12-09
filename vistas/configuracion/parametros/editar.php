<script type="text/javascript">

  function editar_parametro() {

    if(!validar_requeridos()){
        return 0;
    }

    var datos = $('#formParametros').serialize();

    ejecutarAccion(
      'configuracion',
      'Parametros',
      'guardar',
      datos,
      'editar_parametro2(data)'
    );

  }

  function editar_parametro2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Parametro Editado Exitosamente", "center");
      cargar_parametros();
    } else {
      mensaje_alertas("error", "No se modificaron los datos del formulario", "center");
    }

  }
</script>

<?php
$froms = new Formularios();
?>

<form id="formParametros" method="post">

  <div class="box box-default">

    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Parametro</h3>
            </div>

            <form role="form">

            <input type="hidden" class="form-control" id="id_parametro" name="id_parametro" 
                        value="<?php echo $datos['id_parametro']; ?>">

              <div class="card-body">

                <div class="form-group">
                  <label>Nombre del Parametro<span style="color:red">*</span></label>
                  
                  <input type="text" class="form-control requerido" id="nombre_parametro" name="nombre_parametro" 
                        value="<?php echo utf8_encode($datos['nombre_parametro']); ?>">

                </div>

                <div class="form-group">

                  <label>Valor<span style="color:red">*</span></label>
                  <input type="text" class="form-control requerido" id="valor_parametro" name="valor_parametro"
                        value="<?php echo utf8_encode($datos['valor_parametro']); ?>">

                </div>

              </div>

              <div class="card-footer">
                <button onclick="cargar_parametros();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_parametro(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>