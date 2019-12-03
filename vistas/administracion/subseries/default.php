<script type="text/javascript">

    function nuevo_subserie() {

        abrirVentanaContenedor(
            'administracion', 'Subseries', 'nuevo', '', ''
        );

    }

    function editar_subserie(id_subserie) {

        abrirVentanaContenedor(
            'administracion',
            'Subseries',
            'editar',
            'id_subserie=' + id_subserie,
            ''
        );

    }

    function eliminar_subserie(id_subserie) {

        mensaje_confirmar("¿Está seguro de eliminar el rol?", "eliminar_subserie2(" + id_subserie + "); ");

    }

    function eliminar_subserie2(id_subserie) {

        ejecutarAccion(
            'administracion',
            'Subseries',
            'eliminar',
            "id_subserie=" + id_subserie,
            ' mensaje_alertas("success", "Subserie Eliminado con Éxito", "center"); cargar_subseries();'
        );

    }

    $(document).ready(function() {
        CrearTabla('tabla_subseries');
    });
</script>

<div class="row">


    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">
            <div class="card-header">
                <div class="box">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 style="color:grey">GESTIONAR SUBSERIES DOCUMENTAL</h4>
                        </div>
                        <div class="col-md-2">
                            <button onclick="nuevo_subserie(); return false;" class="btn btn-success btn-sm">
                                NUEVO SUBSERIE DOCUMENTAL
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
                            <th style='background-color:lavender'>SERIE</th>
                            <th style='background-color:lavender'>CODIGO</th>
                            <th style='background-color:lavender'>NOMBRE</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($subseries as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . utf8_encode(strtolower($items['serie_subserie'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['codigo_subserie'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['nombre_subserie'])) . "</td>";

                            echo "<td><a href='#'><i onclick='editar_subserie(" . $items['id_subserie'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_subserie(" . $items['id_subserie'] . ");' 
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