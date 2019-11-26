<script type="text/javascript">

    function nuevo_expediente() {

        abrirVentanaContenedor(
            'configuracion', 'Expedientes', 'nuevo', '', ''
        );

    }

    function editar_expediente(id_expediente) {

        abrirVentanaContenedor(
            'configuracion',
            'Expedientes',
            'editar',
            'id_expediente=' + id_expediente,
            ''
        );

    }

    function eliminar_expediente(id_expediente) {

        mensaje_confirmar("¿Está seguro de eliminar el rol?", "eliminar_expediente2(" + id_expediente + "); ");

    }

    function eliminar_expediente2(id_expediente) {

        ejecutarAccion(
            'configuracion',
            'Expedientes',
            'eliminar',
            "id_expediente=" + id_expediente,
            ' mensaje_alertas("success", "Expediente Eliminado con Éxito", "center"); cargar_expedientes();'
        );

    }

    $(document).ready(function() {
        CrearTabla('tabla_expedientes');
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

                            <button onclick="nuevo_expediente(); return false;" class="btn btn-success btn-sm">
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
                        foreach ($expedientes as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . utf8_encode(strtolower($items['nombre_expediente'])) . "</td>";


                            echo "<td><a href='#'><i onclick='editar_expediente(" . $items['id_expediente'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_expediente(" . $items['id_expediente'] . ");' 
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