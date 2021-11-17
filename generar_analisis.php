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
 
 echo '<tbody>';
   echo '<tr>';

    $contadormultas=0;
    for($i=1; $i<=count($_SESSION['radares']); $i++) 
    { 
      $contadormultastotales=0;
  
      foreach($_SESSION['multas'] as $valor) 
      {
        if($valor['radar']==$i) 
        {
          $contadormultas++;
          $contadormultastotales=$contadormultastotales+ 1;
        }
      } 

      echo' <td>'.$contadormultastotales.'</td>';
    }

    echo '</tr>';
  echo '</tbody>';
echo '</table>';

include 'pie.php';

