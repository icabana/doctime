<script type="text/javascript">

    function nuevo_archivador() {

        abrirVentanaContenedor(
            'archivos', 'Archivadores', 'nuevo', '', ''
        );

    }

    function editar_archivador(id_archivador) {

        abrirVentanaContenedor(
            'archivos',
            'Archivadores',
            'editar',
            'id_archivador=' + id_archivador,
            ''
        );

    }

    function eliminar_archivador(id_archivador) {

        mensaje_confirmar("¿Está seguro de eliminar el archivador?", "eliminar_archivador2(" + id_archivador + "); ");

    }

    function eliminar_archivador2(id_archivador) {

        ejecutarAccion(
            'archivos',
            'Archivadores',
            'eliminar',
            "id_archivador=" + id_archivador,
            'if(data == 1){  mensaje_alertas("success", "Archivador Eliminado con Éxito", "center"); cargar_archivadores(); } else { mensaje_alertas("error", "Este Archivor tiene archivos asociados", "center"); } '
        );

    }

    $(document).ready(function() {
        CrearTabla('tabla_archivadores');
    });
</script>

<div class="row">


    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">
            <div class="card-header">
                <div class="box">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 style="color:grey">GESTIONAR ARCHIVADORES</h4>
                        </div>
                        <div class="col-md-2">

                            <button onclick="nuevo_archivador(); return false;" class="btn btn-success btn-sm">
                                NUEVO ARCHIVADOR
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
                            <th style='background-color:lavender'>CIUDAD</th>
                            <th style='background-color:lavender'>DIRECCIÓN</th>
                            <th style='background-color:lavender'>UBICACIÓN</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($archivadores as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . $items['nombre_archivador'] . "</td>";
                            echo "<td>" . $items['ciudad_archivador'] . "</td>";
                            echo "<td>" . $items['direccion_archivador'] . "</td>";
                            echo "<td>" . $items['ubicacion_archivador'] . "</td>";


                            echo "<td><a href='#'><i onclick='editar_archivador(" . $items['id_archivador'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_archivador(" . $items['id_archivador'] . ");' 
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