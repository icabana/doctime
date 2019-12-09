<script type="text/javascript">

  function editar_usuario() {

    if(!validar_requeridos()){
        return 0;
    }
    
    var datos = $('#formUsuarios').serialize();

    ejecutarAccion(
      'configuracion',
      'Usuarios',
      'guardar',
      datos,
      'editar_usuario2(data)'
    );

  }

  function editar_usuario2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Usuario Editado Exitosamente", "center");
      cargar_usuarios();
    } else {
      mensaje_alertas("error", "No se modificaron los datos del formulario", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formUsuarios" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Usuario</h3>
            </div>

            <form role="form">

              <input type="hidden" id="id_usuario" name="id_usuario" 
              value="<?php echo $datos['id_usuario']; ?>">

              <div class="card-body">
                <div class="form-group">
                  <label>Nick<span style="color:red">*</span></label>

                  <input type="text" class="form-control requerido" id="nick_usuario" name="nick_usuario" 
                  value="<?php echo utf8_encode($datos['nick_usuario']); ?>">

                </div>

                <div class="form-group">
                  <label>Password<span style="color:red">*</span></label>
                  <input type="hidden" id="password2_usuario" name="password2_usuario" 
                          value="<?php echo $datos['password_usuario']; ?>">
                  <input type="password" class="form-control requerido" id="password_usuario" 
                      name="password_usuario" value="<?php echo $datos['password_usuario']; ?>">
                </div>

                <div class="form-group">
                  <label>Estado<span style="color:red">*</span></label>
                  <select class="form-control" id="estado_usuario" name="estado_usuario">
                    <option value="1" <?php if ($datos['estado_usuario'] == 1) {
                                        echo "selected";
                                      } ?>>ACTIVO</option>
                    <option value="0" <?php if ($datos['estado_usuario'] == 0) {
                                        echo "selected";
                                      } ?>>INACTIVO</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Rol<span style="color:red">*</span></label>
                  <?php
                  echo $froms->Lista_Desplegable(
                    $roles,
                    'nombre_rol',
                    'id_rol',
                    'rol_usuario',
                    $datos['rol_usuario'],
                    '',
                    ''
                  );
                  ?>

                </div>
              </div>

              <div class="card-footer">
                <button onclick="cargar_usuarios();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_usuario(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>