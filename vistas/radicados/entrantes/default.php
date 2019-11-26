<script type="text/javascript">

    function nuevo_entrante() {

        abrirVentanaContenedor(
            'configuracion', 'Entrantes', 'nuevo', '', ''
        );

    }

    function editar_entrante(id_entrante) {

        abrirVentanaContenedor(
            'configuracion',
            'Entrantes',
            'editar',
            'id_entrante=' + id_entrante,
            ''
        );

    }

    function eliminar_entrante(id_entrante) {

        mensaje_confirmar("¿Está seguro de eliminar el rol?", "eliminar_entrante2(" + id_entrante + "); ");

    }

    function eliminar_entrante2(id_entrante) {

        ejecutarAccion(
            'configuracion',
            'Entrantes',
            'eliminar',
            "id_entrante=" + id_entrante,
            ' mensaje_alertas("success", "Entrante Eliminado con Éxito", "center"); cargar_entrantes();'
        );

    }

    $(document).ready(function() {
        CrearTabla('tabla_entrantes');
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

                            <button onclick="nuevo_entrante(); return false;" class="btn btn-success btn-sm">
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
                        foreach ($entrantes as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . utf8_encode(strtolower($items['nombre_entrante'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['nombre_saliente'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['nombre_saliente'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['nombre_saliente'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['nombre_saliente'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['nombre_saliente'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['nombre_saliente'])) . "</td>";


                            echo "<td><a href='#'><i onclick='editar_entrante(" . $items['id_entrante'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_entrante(" . $items['id_entrante'] . ");' 
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