
<div class="col-md-12">
    <div style="padding:25px" class="box">
           

<div class="box-body table-hover no-padding">
<table  id="tabla_dependencias" class="table table-bordered table-hover"  >
    <thead>
        <tr>     
            <th  style='background-color:lavender'><h6><b>No.</b></h6></th>
            <th  style='background-color:lavender'><h6><b>Nombre de la Dependencia</b></h6></th>
            <th  style='background-color:lavender'><h6><b>Nombre del Jefe</b></h6></th>
        </tr>
    </thead>
    <tbody >

<?php
            
    $cont = 1;  
        
    foreach ($dependencias as $NM => $items) {
        
        echo '<tr>';                    
        
        echo "<td>" . $cont . "</td>";            
        echo "<td>" . $items['nombre_dependencia'] . "</td>"; 
        echo "<td>" . utf8_encode( $items['nombre_jefe'] ) . "</td>";      
        
        echo "</tr>";
        
        $cont++;  
     }                 
    
?>
</tbody>
</table>
</div>
</div>
    </div>