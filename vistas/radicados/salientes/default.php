<script type="text/javascript">

    function nuevo_saliente() {

        abrirVentanaContenedor(
            'radicados', 'Salientes', 'nuevo', '', ''
        );

    }

    function editar_saliente(id_saliente) {

        abrirVentanaContenedor(
            'radicados',
            'Salientes',
            'editar',
            'id_saliente=' + id_saliente,
            ''
        );

    }

    function eliminar_saliente(id_saliente) {

        mensaje_confirmar("¿Está seguro de eliminar el rol?", "eliminar_saliente2(" + id_saliente + "); ");

    }

    function eliminar_saliente2(id_saliente) {

        ejecutarAccion(
            'radicados',
            'Salientes',
            'eliminar',
            "id_saliente=" + id_saliente,
            ' mensaje_alertas("success", "Saliente Eliminado con Éxito", "center"); cargar_salientes();'
        );

    }

    $(document).ready(function() {
        CrearTabla('tabla_salientes');
    });
</script>

<div class="row">


    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">
            <div class="card-header">
                <div class="box">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 style="color:grey">GESTIONAR RADICADOS DE SALIDA</h4>
                        </div>
                        <div class="col-md-2">

                            <button onclick="nuevo_saliente(); return false;" class="btn btn-success btn-sm">
                                NUEVO RADICADO DE SALIDA
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
                            <th style='background-color:lavender'>No. de Radicado</th>
                            <th style='background-color:lavender'>Fecha de Radicado</th>
                            <th style='background-color:lavender'>Remitente</th>
                            <th style='background-color:lavender'>Destinatario</th>
                            <th style='background-color:lavender'>Asunto</th>
                            <th style='background-color:lavender'>Tipo de Comunicaci&oacute;n</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($salientes as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . utf8_encode(strtolower($items['numero_saliente'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['fecha_saliente'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['nombre_remitente'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['nombre_destinatario'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['asunto_saliente'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['tipocomunicacion_saliente'])) . "</td>";


                            echo "<td><a href='#'><i onclick='editar_saliente(" . $items['id_saliente'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_saliente(" . $items['id_saliente'] . ");' 
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