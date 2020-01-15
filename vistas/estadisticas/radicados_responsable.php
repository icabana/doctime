<script type="text/javascript">

function ver_radicados_responsable(id_responsable){

$('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
$('.ui-widget').remove();
$('.elfinder-quicklook').remove();
$('.ui-draggable').remove();
$('.ui-resizable').remove();

limpiar_cuerpo();

abrirVentanaContenedorTabla(
    'tabla_entrantes',
    'radicados', 'Entrantes', 'verRadicadosResponsable', 'id_responsable='+id_responsable);    
    
}

</script>

<div class="row">


    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">
            <div class="card-header">
                <div class="box">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <h4 style="color:grey">RADICADOS POR EMPLEADO</h4>
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

                            echo "<td>" . strtolower($items['nombres_empleado']." ".$items['apellidos_empleado']) . "</td>";
                           
                            if($numero > 0){
                            echo "<td><a href='#' onclick='ver_radicados_responsable(".$items['id_empleado']."); return false;'>" . $numero . "</td>";
                        }else{
                            echo "<td>".$numero."</td>";
                        }

                            echo "</tr>";
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>