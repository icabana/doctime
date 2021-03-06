<script type="text/javascript">

    function nuevo_usuario() {

        abrirVentanaContenedor(
            'configuracion', 'Usuarios', 'nuevo', '', ''
        );

    }

    function editar_usuario(id_usuario) {

        abrirVentanaContenedor(
            'configuracion',
            'Usuarios',
            'editar',
            'id_usuario=' + id_usuario,
            ''
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
                            <h4 style="color:grey">GESTIONAR USUARIOS</h4>
                        </div>
                       
                    </div>
                </div>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabla_usuarios" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>NICK</th>
                            <th style='background-color:lavender'>ESTADO</th>
                            <th style='background-color:lavender'>ROL</th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($usuarios as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . $items['nick_usuario'] . "</td>";

                            if ($items['estado_usuario'] == '1') {
                                echo "<td>Activo</td>";
                            } else {
                                echo "<td>Inactivo</td>";
                            }

                            echo "<td>" . $items['nombre_rol'] . "</td>";

                            echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='editar_usuario(" . $items['id_usuario'] . ");' ><i
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