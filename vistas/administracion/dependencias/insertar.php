<script type="text/javascript">

  function insertar_dependencia() {

    if(!validar_requeridos()){
        return 0;
}

      var datos = $('#formDependencias').serialize();

      ejecutarAccion(
        'administracion',
        'Dependencias',
        'insertar',
        datos,
        'insertar_dependencia2(data)'
      );

  }

  function insertar_dependencia2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Dependencia Registrado Exitosamente", "center");
        cargar_dependencias();
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
      <div class="col-md-3"></div>
      <div style="padding: 25px" class="col-md-6">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Registrar Dependencia</h3>
          </div>

          <form autocomplete="on" id="formDependencias" method="post">

            <div class="card-body">

              <div class="form-group">
                <label>C&oacute;digo Dependencia<span style="color:red">*</span></label>
                <input type="text" class="form-control requerido" id="codigo_dependencia" name="codigo_dependencia">
              </div>

              <div class="form-group">
                <label>Nombre de la Dependencia<span style="color:red">*</span></label>
                <input type="text" class="form-control requerido" id="nombre_dependencia" name="nombre_dependencia">
              </div>

              <div class="form-group">
                  <label>Nombre del Jefe<span style="color:red">*</span></label>
                    <?php
                    echo $froms->Lista_Desplegable(
                            $empleados,
                            'nombre_empleado',
                            'id_empleado',
                            'jefe_dependencia',
                            '',
                            '',
                            ''
                        );
                    ?>

                </div>

            </div>

            <div class="card-footer">
              <button onclick="cargar_dependencias();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_dependencia(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>