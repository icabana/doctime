<script type="text/javascript">

    function nuevo_empleado() {

        abrirVentanaContenedor(
            'administracion', 
            'Empleados', 
            'nuevo', 
            '', 
            ''
        );

    }

    function editar_empleado(id_empleado) {

        abrirVentanaContenedor(
            'administracion',
            'Empleados',
            'editar',
            'id_empleado=' + id_empleado,
            ''
        );

    }

    function eliminar_empleado(id_empleado) {

        mensaje_confirmar("¿Está seguro de eliminar el Empleado?", "eliminar_empleado2(" + id_empleado + "); ");

    }

    function eliminar_empleado2(id_empleado) {

        ejecutarAccion(
            'administracion',
            'Empleados',
            'eliminar',
            "id_empleado=" + id_empleado,
            ' mensaje_alertas("success", "Empleado Eliminado con Éxito", "center"); cargar_empleados();'
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
                            <h4 style="color:grey">GESTIONAR EMPLEADOS</h4>
                        </div>
                        <div class="col-md-2">
                            <button onclick="nuevo_empleado(); return false;" class="btn btn-success btn-sm">
                                NUEVO EMPLEADO
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabla_empleados" style="width:100%; font-size:12px" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>Documento</th>
                            <th style='background-color:lavender'>Dependencia</th>
                            <th style='background-color:lavender'>Nombre Completo</th>
                            <th style='background-color:lavender'>Correo </th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($empleados as $NM => $items) {

                            echo "<tr>";
                            
                            echo "<td>" . $items['codigo_tipodocumento']." ".$items['documento_empleado'] . "</td>";
                            echo "<td>" . $items['nombre_dependencia'] . "</td>";
                            echo "<td>" . $items['nombres_empleado']."  ".$items['apellidos_empleado'] . "</td>";
                            echo "<td>" . $items['correo_empleado'] . "</td>";

                            echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' 
                                            onclick='editar_empleado(" . $items['id_empleado'] . ");' >
                                        <i class='fas fa-edit'></i></a></td>";

                            echo "<td><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#'
                                        onclick='eliminar_empleado(" . $items['id_empleado'] . ");' >
                                    <i class='fas fa-trash'></i></a></td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>