<?php

echo '<table id="tabla_trazabilidad" class="table table-hover table-striped">
                        <thead>
                          <tr>
                            <th style="background-color:lavender">No.</th>
                            <th style="background-color:lavender; ">Usuario</th>
                            <th style="background-color:lavender">Acci&oacute;n</th>
                            <th style="background-color:lavender; ">Fecha</th>
                          </tr>
                        </thead>
                        <tbody>';

                     

                          $cont = 1;
                          foreach ($trazabilidad as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . $cont . "</td>";
                            echo "<td>" . strtolower($items["nombres_empleado"] . " " . $items["apellidos_empleado"]) . "</td>";
                            echo "<td>" . strtolower($items["accion_trazabilidad"]) . "</td>";
                            echo "<td>" . strtolower($items["fecha_trazabilidad"]) . "</td>";


                            echo "</tr>";

                            $cont++;
                          }
                        

                          echo " </tbody>
                      </table>";

                      ?>