<?php
session_start();
include 'head.php';
echo'Analisis de las Multas por Radares <mark>(1.5 Puntos)<br><br>
<table>
  <thead>
    <tr>
      <th>Radar 1</th>
      <th>Radar 2</th>
      <th>Radar 3</th>
      <th>Radar 4</th>
    </tr>
  </thead>';
  foreach($_SESSION['multas']as $clave=>$valor)
{

  echo '<tbody>';
    echo '<tr>';
      echo' <td>'.$clave.'</td>';
      echo' <td>'.$clave.'</td>';
      echo' <td>'.$clave.'</td>';
      echo' <td>'.$clave.'</td>';
    echo '</tr>';
    
  echo '</tfoot>';
}
echo '</table>';


include 'pie.php';

