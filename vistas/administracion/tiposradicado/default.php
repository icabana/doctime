<script type="text/javascript">

    function nuevo_tiporadicado() {

        abrirVentanaContenedor(
            'administracion', 'Tiposradicado', 'nuevo', '', ''
        );

    }

    function editar_tiporadicado(id_tiporadicado) {

        abrirVentanaContenedor(
            'administracion',
            'Tiposradicado',
            'editar',
            'id_tiporadicado=' + id_tiporadicado,
            ''
        );

    }

    function eliminar_tiporadicado(id_tiporadicado) {

        mensaje_confirmar("¿Está seguro de eliminar el tipo de radicado?", "eliminar_tiporadicado2(" + id_tiporadicado + "); ");

    }

    function eliminar_tiporadicado2(id_tiporadicado) {

        ejecutarAccion(
            'administracion',
            'Tiposradicado',
            'eliminar',
            "id_tiporadicado=" + id_tiporadicado,
            'if(data == 1){  mensaje_alertas("success", "Tipo de radicado Eliminado con Éxito", "center"); cargar_tiposradicado(); } else { mensaje_alertas("error", "Esta Tipo de radicado tiene radicados asociados", "center"); } '
        );

    }
</script>

<div class="row">


    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">
            <div class="card-header">
                <div class="box">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 style="color:grey">GESTIONAR TIPOS DE RADICADO</h4>
                        </div>
                        <div class="col-md-2">

                            <button onclick="nuevo_tiporadicado(); return false;" class="btn btn-success btn-sm">
                                NUEVO TIPO DE RADICADO
                            </button>

                        </div>
                    </div>
                </div>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabla_tiposradicado" style="width:100%; font-size:12px" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>TIPO DE RADICADO</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tiposradicado as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . $items['nombre_tiporadicado'] . "</td>";
                            

                            echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='editar_tiporadicado(" . $items['id_tiporadicado'] . ");' ><i
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#' onclick='eliminar_tiporadicado(" . $items['id_tiporadicado'] . ");' ><i
                                    class='fas fa-trash'></i></a></td>";


                            echo "</tr>";
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>