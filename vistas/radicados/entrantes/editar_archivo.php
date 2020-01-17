<script type="text/javascript">
  function editarDatosArchivoEntrante() {

    if (!validar_requeridos()) {
      return 0;
    }

    var datos = $('#formDatosArchivo').serialize();

    ejecutarAccion(
      'radicados',
      'Entrantes',
      'guardarDatosArchivo',
      datos,
      'editarDatosArchivoEntrante2(data)'
    );

  }

  function editarDatosArchivoEntrante2(data) {

      mensaje_alertas("success", "Datos de Archivo Registrados Exitosamente", "center");
      ver_archivados();
  }


</script>


<?php
$froms = new Formularios();
?>



<div class="box box-default">

  <div style="padding: 25px" class="box-body">

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Editar Informacion de Archivo</h3>
      </div>


      <form autocomplete="on" id="formDatosArchivo" method="post">

      <input type="hidden" id="entrante_archivo" name="entrante_archivo" value="<?php echo $datos_archivo['entrante_archivo']; ?>">

      <div class="modal-body">

<div class="row">
  <div class="col-md-12">
    <label>Seleccionar Archivo<span style="color:red">*</span></label>
    <?php
      echo $froms->Lista_Desplegable(
        $archivadores,
        'nombre_archivador',
        'id_archivador',
        'archivador_archivo',
        $datos_archivo['archivador_archivo'],
        '',
        ''
      );
    ?>
  </div>  
  </div>  
<br>

<div class="row">
  <div class="col-md-6">
    <label>Fecha Inicio<span style="color:red">*</span></label>
    <input type="date" value="<?php echo $datos_archivo['fechainicio_archivo']; ?>" class="form-control requerido_archivar" id="fechainicio_archivo" name="fechainicio_archivo">
  </div>

  <div class="col-md-6">
    <label>Fecha Final<span style="color:red">*</span></label>
    <input type="date" value="<?php echo $datos_archivo['fechafinal_archivo']; ?>" class="form-control requerido_archivar" id="fechafinal_archivo" name="fechafinal_archivo">
  </div>
</div>
<br>
<div class="row">

  <div class="col-md-6">
    <label>Unidad de Conservación<span style="color:red">*</span></label>
    <?php
      echo $froms->Lista_Desplegable(
        $unidades,
        'nombre_unidad',
        'id_unidad',
        'unidad_archivo',
        $datos_archivo['unidad_archivo'],
        '',
        ''
      );
    ?>
  </div>

  <div class="col-md-6">
    <label>C&oacute;digo Unidad<span style="color:red">*</span></label>
    <input type="text" value="<?php echo $datos_archivo['codigo_archivo']; ?>" class="form-control requerido_archivar" id="codigo_archivo" name="codigo_archivo">
  </div>

</div>

  <br>

  <div class="row">
  <div class="col-md-6">
    <label>Folios<span style="color:red">*</span></label>
    <input type="text" value="<?php echo $datos_archivo['folios_archivo']; ?>" onkeypress="return no_numeros(event)" class="form-control requerido_archivar" id="folios_archivo" name="folios_archivo">
  </div>

  <div class="col-md-6">
    <label>Anexos<span style="color:red">*</span></label>
    <input type="text" value="<?php echo $datos_archivo['anexos_archivo']; ?>" onkeypress="return no_numeros(event)" class="form-control requerido_archivar" id="anexos_archivo" name="anexos_archivo">
  </div>
  </div>




</div>

<div class="modal-footer">        
        <button onclick="ver_archivados();" class="btn btn-danger">Cancelar</button>
          <button onclick="editarDatosArchivoEntrante(); return false;" class="btn btn-success">Guardar</button>
</div>
</div>

        </div>

      </form>

    </div>
  </div>







