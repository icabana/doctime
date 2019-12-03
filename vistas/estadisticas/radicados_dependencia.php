<script type="text/javascript">

    function nuevo_carpeta() {

        abrirVentanaContenedor(
            'radicados', 'Carpetas', 'nuevo', '', ''
        );

    }

    function editar_carpeta(id_carpeta) {

        abrirVentanaContenedor(
            'radicados',
            'Carpetas',
            'editar',
            'id_carpeta=' + id_carpeta,
            ''
        );

    }

    function eliminar_carpeta(id_carpeta) {

        mensaje_confirmar("¿Está seguro de eliminar el rol?", "eliminar_carpeta2(" + id_carpeta + "); ");

    }

    function eliminar_carpeta2(id_carpeta) {

        ejecutarAccion(
            'radicados',
            'Carpetas',
            'eliminar',
            "id_carpeta=" + id_carpeta,
            ' mensaje_alertas("success", "Carpeta Eliminado con Éxito", "center"); cargar_carpetas();'
        );

    }

    $(document).ready(function() {
        CrearTabla('tabla_carpetas');
    });
</script>

<div class="row">


    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">
            <div class="card-header">
                <div class="box">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <h4 style="color:grey">RADICADOS POR DEPENDENCIA</h4>
                        </div>
                       
                    </div>
                </div>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>Nombre de la dependencia</th>
                            <th style='background-color:lavender'>No. de Radicados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($entrantes as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . utf8_encode(strtolower($items['nombre_dependencia'])) . "</td>";

                            echo "<td><a href='#'><i onclick='editar_carpeta(" . $items['cantidad'] . ");' 
                                    class='fas fa-edit'></i></a></td>";


                            echo "</tr>";
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>