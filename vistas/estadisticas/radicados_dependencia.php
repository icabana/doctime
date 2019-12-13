<script type="text/javascript">

function ver_radicados_dependencia(id_dependencia){

$('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
$('.ui-widget').remove();
$('.elfinder-quicklook').remove();
$('.ui-draggable').remove();
$('.ui-resizable').remove();

limpiar_cuerpo();

abrirVentanaContenedorTabla(
    'tabla_entrantes',
    'radicados', 'Entrantes', 'verRadicadosDependencia', 'id_dependencia='+id_dependencia);    
    
}

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
                            <th style='background-color:lavender'>Nombre de la Dependencia</th>
                            <th style='background-color:lavender'>Número de Radicados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include("modelos/radicados/EntrantesModel.php");   
                        $EntrantesModel = new EntrantesModel();

                        foreach ($dependencias as $NM => $items) {

                            $numero = $EntrantesModel->getNumeroRadicadosPorDependencia($items['id_dependencia']);

                            echo "<tr>";

                            echo "<td>" . strtolower($items['nombre_dependencia']) . "</td>";
                           
                            if($numero > 0){
                                echo "<td><a href='#' onclick='ver_radicados_dependencia(".$items['id_dependencia']."); return false;'>" . $numero . "</a></td>";
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