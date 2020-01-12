<script type="text/javascript">

  function insertar_tiporadicado_entrante() {

      var datos = $('#formTiposradicado_entrantes').serialize();

      ejecutarAccion(
        'administracion',
        'Tiposradicado',
        'insertarModal',
        datos,
        '$("#div_tipo_radicado_entrante").html(data); $("#modal_tipo_radicado").modal("hide");'
      );

  }
  
</script>


<div class="modal fade" id="modal_tipo_radicado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear nuevo tipo de radicado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form autocomplete="on" id="formTiposradicado_entrantes" method="post">

        <div class="card-body">


          <div class="form-group">
            <label>Tipo de radicado</label>
            <input type="text" class="form-control" id="nombre_tiporadicado_entrante" name="nombre_tiporadicado_entrante">
          </div>



        </div>


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button onclick="insertar_tiporadicado_entrante(); return false;" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>