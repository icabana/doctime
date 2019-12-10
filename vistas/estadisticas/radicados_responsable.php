<div class="row">


    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">
            <div class="card-header">
                <div class="box">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <h4 style="color:grey">RADICADOS POR RESPONSABLE</h4>
                        </div>
                       
                    </div>
                </div>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>Nombre del Responsable</th>
                            <th style='background-color:lavender'>Número de Radicados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include("modelos/radicados/EntrantesModel.php");   
                        $EntrantesModel = new EntrantesModel();

                        foreach ($empleados as $NM => $items) {

                            $numero = $EntrantesModel->getNumeroRadicadosPorResponsable($items['id_empleado']);

                            echo "<tr>";

                            echo "<td>" . utf8_encode(strtolower($items['nombres_empleado']." ".$items['apellidos_empleado'])) . "</td>";
                           
                            echo "<td>" . $numero . "</td>";


                            echo "</tr>";
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>