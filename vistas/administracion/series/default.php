<script type="text/javascript">

    function nuevo_serie() {

        abrirVentanaContenedor(
            'configuracion', 'Series', 'nuevo', '', ''
        );

    }

    function editar_serie(id_serie) {

        abrirVentanaContenedor(
            'configuracion',
            'Series',
            'editar',
            'id_serie=' + id_serie,
            ''
        );

    }

    function eliminar_serie(id_serie) {

        mensaje_confirmar("¿Está seguro de eliminar el rol?", "eliminar_serie2(" + id_serie + "); ");

    }

    function eliminar_serie2(id_serie) {

        ejecutarAccion(
            'configuracion',
            'Series',
            'eliminar',
            "id_serie=" + id_serie,
            ' mensaje_alertas("success", "Serie Eliminado con Éxito", "center"); cargar_series();'
        );

    }

    $(document).ready(function() {
        CrearTabla('tabla_series');
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

                            <button onclick="nuevo_serie(); return false;" class="btn btn-success btn-sm">
                                NUEVA SERIE DOCUMENTAL
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
                            <th style='background-color:lavender'>C&Oacute;DIGO</th>
                            <th style='background-color:lavender'>NOMBRE</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($series as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . utf8_encode(strtolower($items['codigo_serie'])) . "</td>";

                            echo "<td>" . utf8_encode(strtolower($items['nombre_serie'])) . "</td>";


                            echo "<td><a href='#'><i onclick='editar_serie(" . $items['id_serie'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_serie(" . $items['id_serie'] . ");' 
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