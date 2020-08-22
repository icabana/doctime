<script type="text/javascript">

    function nuevo_tercero() {

        abrirVentanaContenedor(
            'administracion', 'Terceros', 'nuevo', '', ''
        );

    }

    function editar_tercero(id_tercero) {

        abrirVentanaContenedor(
            'administracion',
            'Terceros',
            'editar',
            'id_tercero=' + id_tercero,
            ''
        );

    }

    function eliminar_tercero(id_tercero) {

        mensaje_confirmar("¿Está seguro de eliminar el Tercero?", "eliminar_tercero2(" + id_tercero + "); ");

    }

    function eliminar_tercero2(id_tercero) {

        ejecutarAccion(
            'administracion',
            'Terceros',
            'eliminar',
            "id_tercero=" + id_tercero,
            ' mensaje_alertas("success", "Tercero Eliminado con Éxito", "center"); cargar_terceros();'
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
                            <h4 style="color:grey">GESTIONAR TERCEROS</h4>
                        </div>
                        <div class="col-md-2">

                            <button onclick="nuevo_tercero(); return false;" class="btn btn-success btn-sm">
                                NUEVO TERCERO
                            </button>

                        </div>
                    </div>
                </div>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabla_terceros" style="width:100%; font-size:12px" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>Documento</th>
                            <th style='background-color:lavender'>Nombre del tercero</th>
                            <th style='background-color:lavender'>Direcci&oacute;n</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($terceros as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . $items['codigo_tipodocumento']." ".$items['documento_tercero'] . "</td>";
                            echo "<td>" . $items['nombre_tercero'] . "</td>";                            
                            echo "<td>" . $items['direccion_tercero']." ".$items['ciudad_tercero'] . "</td>";


                            echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='editar_tercero(" . $items['id_tercero'] . ");' ><i
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#' onclick='eliminar_tercero(" . $items['id_tercero'] . ");' ><i
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