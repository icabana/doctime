<script type="text/javascript">

    function nuevo_empleado() {

        abrirVentanaContenedor(
            'configuracion', 'Empleados', 'nuevo', '', ''
        );

    }

    function editar_empleado(id_empleado) {

        abrirVentanaContenedor(
            'configuracion',
            'Empleados',
            'editar',
            'id_empleado=' + id_empleado,
            ''
        );

    }

    function eliminar_empleado(id_empleado) {

        mensaje_confirmar("¿Está seguro de eliminar el rol?", "eliminar_empleado2(" + id_empleado + "); ");

    }

    function eliminar_empleado2(id_empleado) {

        ejecutarAccion(
            'configuracion',
            'Empleados',
            'eliminar',
            "id_empleado=" + id_empleado,
            ' mensaje_alertas("success", "Empleado Eliminado con Éxito", "center"); cargar_empleados();'
        );

    }

    $(document).ready(function() {
        CrearTabla('tabla_empleados');
    });
</script>

<div class="row">


    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">
            <div class="card-header">
                <div class="box">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 style="color:grey">GESTIONAR EMPLEADOS</h4>
                        </div>
                        <div class="col-md-2">

                            <button onclick="nuevo_empleado(); return false;" class="btn btn-success btn-sm">
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
                            <th style='background-color:lavender'>DOCUMENTO</th>
                            <th style='background-color:lavender'>NOMBRE DEL EMPLEADO</th>
                            <th style='background-color:lavender'>TELEFONO</th>
                            <th style='background-color:lavender'>CORREO</th>
                            <th style='background-color:lavender'>DIRECCION</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($empleados as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . utf8_encode(strtolower($items['documento_empleado'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['nombres_empleado']." ".$items['empleados_empleado'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['telefono_empleado'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['correo_empleado'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['direccion_empleado'])) . "</td>";


                            echo "<td><a href='#'><i onclick='editar_empleado(" . $items['id_empleado'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_empleado(" . $items['id_empleado'] . ");' 
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