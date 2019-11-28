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

        mensaje_confirmar("¿Está seguro de eliminar el rol?", "eliminar_tipodocumental2(" + id_tipodocumental + "); ");

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

    $(document).ready(function() {
        CrearTabla('tabla_tiposdocumentales');
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

                            <button onclick="nuevo_tipodocumental(); return false;" class="btn btn-success btn-sm">
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
                        foreach ($tiposdocumentales as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . utf8_encode(strtolower($items['nombre_tipodocumental'])) . "</td>";


                            echo "<td><a href='#'><i onclick='editar_tipodocumental(" . $items['id_tipodocumental'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_tipodocumental(" . $items['id_tipodocumental'] . ");' 
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