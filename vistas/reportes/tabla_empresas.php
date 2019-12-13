
    <div class="col-md-12">
        <div style="padding:25px" class="box">
           

            <div class="box-body table-hover no-padding">
<table class="table table-condensed"  >
                <thead>
                    <tr>                 
               
                        <th ><h6><center><b>No.</b></center></h6></th>
                        <th ><h6><center><b>NOMBRE DE LA EMPRESA</b></center></h6></th>
                        <th ><h6><center><b>NIT/C&Eacute;DULA</b></center></h6></th>
                        <th ><h6><center><b>DIRECCI&Oacute;N</b></center></h6></th>
                        <th ><h6><center><b>TEL&Eacute;FONO</b></center></h6></th>
                        <th ><h6><center><b>CORREO</b></center></h6></th>
                    </tr>
                </thead>
                <tbody >

<?php
                     $cont = 1;
            
              $fechas = new Fechas();
              
              $fecha_actual = date("Y-m-d");
              
            foreach ($empresas as $NM => $items) {
                
                    echo '<tr>';                    
                    
                    echo "<td><center>" . $cont . "</center></td>";
                    
                    echo "<td><center>" . utf8_encode( strtoupper($items['NOMBRE_EMPRESA']) ) . "</center></td>";
                                        
                    echo "<td><center>" . number_format($items['DOCUMENTO_EMPRESA'],0,',','.') . "</center></td>";
                                                         
                    echo "<td><center>" . utf8_encode( $items['DIRECCION1_EMPRESA'] ) . "</center></td>";
                                    
                    echo "<td><center>" . utf8_encode( $items['TELEFONO_EMPRESA'] ) . "</center></td>";
                    
                    echo "<td><center>" .  $items['CORREO1_EMPRESA']  . "</center></td>";
                    
                    echo "</tr>";
                    
                    $cont++;
                            
            }
?>
                </tbody>
</table>
                   </div>
        </div>
    </div>