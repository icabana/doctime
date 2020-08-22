<script type="text/javascript">

    function nuevo_serie() {

        abrirVentanaContenedor(
            'administracion', 
            'Series', 
            'nuevo', 
            '', 
            ''
        );

    }

    function editar_serie(id_serie) {

        abrirVentanaContenedor(
            'administracion',
            'Series',
            'editar',
            'id_serie=' + id_serie,
            ''
        );

    }

    function eliminar_serie(id_serie) {

        mensaje_confirmar("¿Está seguro de eliminar la Serie Documental?", "eliminar_serie2(" + id_serie + "); ");

    }

    function eliminar_serie2(id_serie) {

        ejecutarAccion(
            'administracion',
            'Series',
            'eliminar',
            "id_serie=" + id_serie,
            'mensaje_alertas("success", "Serie Eliminado con Éxito", "center"); cargar_series();'
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
                        <h4 style="color:grey">GESTIONAR SERIES DOCUMENTALES</h4>
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
            <table id="tabla_series" style="width:100%; font-size:12px" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style='background-color:lavender'>C&Oacute;DIGO DE LA SERIE</th>
                        <th style='background-color:lavender'>NOMBRE DE LA SERIE</th>
                        <th style='background-color:lavender; width:15px'></th>
                        <th style='background-color:lavender; width:15px'></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($series as $NM => $items) {

                        echo "<tr>";

                        echo "<td>" . $items['codigo_serie'] . "</td>";
                        echo "<td>" . $items['nombre_serie'] . "</td>";

                        echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='editar_serie(" . $items['id_serie'] . ");' ><i
                                class='fas fa-edit'></i></a></td>";

                        echo "<td><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#' onclick='eliminar_serie(" . $items['id_serie'] . ");' ><i
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