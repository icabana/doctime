<script type="text/javascript">

    function nuevo_dependencia() {

        abrirVentanaContenedor(
            'administracion', 
            'Dependencias', 
            'nuevo', 
            '', 
            ''
        );

    }

    function editar_dependencia(id_dependencia) {

        abrirVentanaContenedor(
            'administracion',
            'Dependencias',
            'editar',
            'id_dependencia=' + id_dependencia,
            ''
        );

    }

    function eliminar_dependencia(id_dependencia) {

        mensaje_confirmar("¿Está seguro de eliminar la dependencia?", "eliminar_dependencia2(" + id_dependencia + "); ");

    }

    function eliminar_dependencia2(id_dependencia) {

        ejecutarAccion(
            'administracion',
            'Dependencias',
            'eliminar',
            "id_dependencia=" + id_dependencia,
            ' mensaje_alertas("success", "Dependencia Eliminada con Éxito", "center"); cargar_dependencias();'
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
                        <h4 style="color:grey">GESTIONAR DEPENDENCIAS</h4>
                    </div>
                    <div class="col-md-2">

                        <button onclick="nuevo_dependencia(); return false;" class="btn btn-success btn-sm">
                            NUEVA DEPENDENCIA
                        </button>

                    </div>
                </div>
            </div>


        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="tabla_dependencias" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style='background-color:lavender'>C&Oacute;DIGO</th>
                        <th style='background-color:lavender'>NOMBRE DE LA DEPENDENCIA</th>
                        <th style='background-color:lavender'>NOMBRE DEL JEFE</th>
                        <th style='background-color:lavender; width:15px'></th>
                        <th style='background-color:lavender; width:15px'></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($dependencias as $NM => $items) {

                        echo "<tr>";

                        echo "<td>" . utf8_encode(strtolower($items['codigo_dependencia'])) . "</td>";
                        echo "<td>" . utf8_encode(strtolower($items['nombre_dependencia'])) . "</td>";
                        echo "<td>" . utf8_encode(strtolower($items['nombre_jefe'])) . "</td>";                            

                        echo "<td><a href='#'><i onclick='editar_dependencia(" . $items['id_dependencia'] . ");' 
                                class='fas fa-edit'></i></a></td>";

                        echo "<td><a href='#'><i onclick='eliminar_dependencia(" . $items['id_dependencia'] . ");' 
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