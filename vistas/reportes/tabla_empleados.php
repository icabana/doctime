
<div class="col-md-12">
    <div style="padding:25px" class="box">
           

<div class="box-body table-hover no-padding">
<table  id="tabla_empleados" class="table table-bordered table-hover"  >
    <thead>
        <tr>     
            <th  style='background-color:lavender'><h6><b>No.</b></h6></th>
            <th  style='background-color:lavender'><h6><b>Documento</b></h6></th>
            <th  style='background-color:lavender'><h6><b>Nombre del Empleado</b></h6></th>
            <th style='background-color:lavender' ><h6><b>Correo</b></h6></th>
        </tr>
    </thead>
    <tbody >

<?php
            
    $cont = 1;  
        
    foreach ($empleados as $NM => $items) {
        
        echo '<tr>';                    
        
        echo "<td>" . $cont . "</td>";            
        echo "<td>" . $items['codigo_tipodocumento']." ".$items['documento_empleado'] . "</td>"; 
        echo "<td>" . utf8_encode( $items['nombres_empleado']." ".$items['apellidos_empleado'] ) . "</td>";        
        echo "<td>" .  $items['correo_empleado']  . "</td>";
        
        echo "</tr>";
        
        $cont++;  
     }                 
    
?>
</tbody>
</table>
</div>
</div>
    </div>