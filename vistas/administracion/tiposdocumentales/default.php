<script type="text/javascript">

    function nuevo_tipodocumental() {

        abrirVentanaContenedor(
            'administracion', 'Tiposdocumentales', 'nuevo', '', ''
        );

    }

    function editar_tipodocumental(id_tipodocumental) {

        abrirVentanaContenedor(
            'administracion',
            'Tiposdocumentales',
            'editar',
            'id_tipodocumental=' + id_tipodocumental,
            ''
        );

    }

    function eliminar_tipodocumental(id_tipodocumental) {

        mensaje_confirmar("¿Está seguro de eliminar el el tipo Documental?", "eliminar_tipodocumental2(" + id_tipodocumental + "); ");

    }

    function eliminar_tipodocumental2(id_tipodocumental) {

        ejecutarAccion(
            'administracion',
            'Tiposdocumentales',
            'eliminar',
            "id_tipodocumental=" + id_tipodocumental,
            ' mensaje_alertas("success", "Dependencia Eliminado con Éxito", "center"); cargar_tiposdocumentales();'
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
                            <h4 style="color:grey">GESTIONAR TIPOS DOCUMENTALES</h4>
                        </div>
                        <div class="col-md-2">

                            <button onclick="nuevo_tipodocumental(); return false;" class="btn btn-success btn-sm">
                                NUEVO TIPO DOCUMENTAL
                            </button>

                        </div>
                    </div>
                </div>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabla_tiposdocumentales" style="width:100%; font-size:12px" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>SERIE</th>
                            <th style='background-color:lavender'>SUBSERIE</th>
                            <th style='background-color:lavender'>NOMBRE</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tiposdocumentales as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . $items['nombre_serie'] . "</td>";
                            echo "<td>" . $items['nombre_subserie'] . "</td>";
                            echo "<td>" . $items['nombre_tipodocumental'] . "</td>";


                            echo "<td><a href='#'><i onclick='editar_tipodocumental(" . $items['id_tipodocumental'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='eliminar_tipodocumental(" . $items['id_tipodocumental'] . ");' ><i
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