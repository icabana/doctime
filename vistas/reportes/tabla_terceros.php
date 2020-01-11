
<div class="col-md-12">
    <div style="padding:25px" class="box">
           

<div class="box-body table-hover no-padding">
<table  id="tabla_terceros" class="table table-bordered table-hover"  >
    <thead>
        <tr>     
            <th  style='background-color:lavender'><h6><b>No.</b></h6></th>
            <th  style='background-color:lavender'><h6><b>Documento</b></h6></th>
            <th  style='background-color:lavender'><h6><b>Nombre del Tercero</b></h6></th>
            <th style='background-color:lavender' ><h6><b>Correo</b></h6></th>
        </tr>
    </thead>
    <tbody >

<?php
            
    $cont = 1;  
        
    foreach ($terceros as $NM => $items) {
        
        echo '<tr>';                    
        
        echo "<td>" . $cont . "</td>";            
        echo "<td>" . $items['codigo_tipodocumento']." ".$items['documento_tercero'] . "</td>"; 
        echo "<td>" . utf8_encode( $items['nombre_tercero'] ) . "</td>";        
        echo "<td>" .  $items['correo_tercero']  . "</td>";
        
        echo "</tr>";
        
        $cont++;  
     }                 
    
?>
</tbody>
</table>
</div>
</div>
    </div>