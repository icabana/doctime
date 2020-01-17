<script type="text/javascript">

    function nuevo_unidad() {

        abrirVentanaContenedor(
            'archivos', 'Unidades', 'nuevo', '', ''
        );

    }

    function editar_unidad(id_unidad) {

        abrirVentanaContenedor(
            'archivos',
            'Unidades',
            'editar',
            'id_unidad=' + id_unidad,
            ''
        );

    }

    function eliminar_unidad(id_unidad) {

        mensaje_confirmar("¿Está seguro de eliminar la unidad seleccionada?", "eliminar_unidad2(" + id_unidad + "); ");

    }

    function eliminar_unidad2(id_unidad) {

        ejecutarAccion(
            'archivos',
            'Unidades',
            'eliminar',
            "id_unidad=" + id_unidad,
            'if(data == 1){  mensaje_alertas("success", "Unidad Eliminada con Éxito", "center"); cargar_unidades(); } else { mensaje_alertas("error", "Esta Unidad tiene Archivos asociados", "center"); } '
        );

    }

    $(document).ready(function() {
        CrearTabla('tabla_unidades');
    });
</script>

<div class="row">


    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">
            <div class="card-header">
                <div class="box">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 style="color:grey">GESTIONAR UNIDADES</h4>
                        </div>
                        <div class="col-md-2">

                            <button onclick="nuevo_unidad(); return false;" class="btn btn-success btn-sm">
                                NUEVA UNIDAD
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
                            <th style='background-color:lavender'>Nombre Unidad de Consevaci&oacute;n</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($unidades as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . $items['nombre_unidad'] . "</td>";


                            echo "<td><a href='#'><i onclick='editar_unidad(" . $items['id_unidad'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_unidad(" . $items['id_unidad'] . ");' 
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