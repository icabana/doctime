<div class="card-body">
    <table id="tabla_dependencias" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th style='background-color:lavender'>No. de Radicado</th>
                <th style='background-color:lavender'>Fecha de Radicado</th>
                <th style='background-color:lavender'>Remitente</th>
                <th style='background-color:lavender'>Destinatario</th>
                <th style='background-color:lavender'>Asunto</th>
                <th style='background-color:lavender'>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($entrantes as $NM => $items) {

                echo "<tr>";

                echo "<td>" . $items['numero_entrante'] . "</td>";
                echo "<td>" . $items['fecharadicado_entrante'] . "</td>";
                echo "<td>" . $items['nombre_tercero'] . "</td>";
                echo "<td>" . $items['nombres_empleado']." ".$items['apellidos_empleado']  . "</td>";
                echo "<td>" . $items['asunto_entrante'] . "</td>";
                echo "<td>" . $items['nombre_estado'] . "</td>";                            

                echo "</tr>";

            }
            ?>
        </tbody>
    </table>
</div>