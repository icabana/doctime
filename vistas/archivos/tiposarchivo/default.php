<script type="text/javascript">

    function nuevo_tipoarchivo() {

        abrirVentanaContenedor(
            'configuracion', 'Tiposarchivo', 'nuevo', '', ''
        );

    }

    function editar_tipoarchivo(id_tipoarchivo) {

        abrirVentanaContenedor(
            'configuracion',
            'Tiposarchivo',
            'editar',
            'id_tipoarchivo=' + id_tipoarchivo,
            ''
        );

    }

    function eliminar_tipoarchivo(id_tipoarchivo) {

        mensaje_confirmar("¿Está seguro de eliminar el rol?", "eliminar_tipoarchivo2(" + id_tipoarchivo + "); ");

    }

    function eliminar_tipoarchivo2(id_tipoarchivo) {

        ejecutarAccion(
            'configuracion',
            'Tiposarchivo',
            'eliminar',
            "id_tipoarchivo=" + id_tipoarchivo,
            ' mensaje_alertas("success", "Tipoarchivo Eliminado con Éxito", "center"); cargar_tiposarchivo();'
        );

    }

    $(document).ready(function() {
        CrearTabla('tabla_tiposarchivo');
    });
</script>

<div class="row">


    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">
            <div class="card-header">
                <div class="box">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 style="color:grey">GESTIONAR ROLES</h4>
                        </div>
                        <div class="col-md-2">

                            <button onclick="nuevo_tipoarchivo(); return false;" class="btn btn-success btn-sm">
                                NUEVO ROL
                            </button>

                        </div>
                    </div>
                </div>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>NOMBRE</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tiposarchivo as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . utf8_encode(strtolower($items['nombre_tipoarchivo'])) . "</td>";


                            echo "<td><a href='#'><i onclick='editar_tipoarchivo(" . $items['id_tipoarchivo'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_tipoarchivo(" . $items['id_tipoarchivo'] . ");' 
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