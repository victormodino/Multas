<?php
session_start();

include 'head.php';

if(isset($_REQUEST['insertar'])) //si he pulsado pillado por el radar
{
  $Matricula=$_REQUEST['matricula'];
  $Limite=$_REQUEST['identificador'];
  $Velocidad=$_REQUEST['velocidad'];
  $Fecha=$_REQUEST['fecha_hora'];

  //sacar el nombre del radar
  $NombreRadar =0; //esto tenia yo un if pero asi he pensado que mejor
  switch ($Limite) {
    case '30':
      $NombreRadar = 1;
      break;
    case '50':
      $NombreRadar = 2;
      break;
      case '90':
      $NombreRadar = 3;
      break;
      case '100':
      $NombreRadar = 4;
      break;
  }
  
  $Cuantia=0;
  $Cuantia=(($Velocidad-$Limite)*10)+50;

  $Pagado="NO";//porque aun no esta pagado
  
  //inserto en el array, ( esto lo estaba metiendo mal sin los ''=>)
  $_SESSION['multas'][]=array(
      'matricula' => $Matricula,
      'radar' => $NombreRadar,
      'limite' => $Limite,
      'velocidad' => $Velocidad,
      'cuantia'=>$Cuantia,
      'fecha_hora' => $Fecha,
      'pagada'=> $Pagado);
    
}

  
 
 


  

echo'Introduce los siguientes datos de la Multa<mark>(2 Puntos)<br><br>
                                     
              <div   class="postcontent">
              <form action="insertar.php" method="post">
                    <table align="center" class="content-layout">
                    <tr>
                      <td align="right"><strong>Matricula:</strong></td>
                      <td>
                        <input type="text" name="matricula" size="10" required/>
                      </td>
                     </tr>
                    <tr>
                        <td align="right"><strong>Selecciona el Radar :</strong></td>
                        <td>
                          <div align="left">
                                <select name="identificador">
                                  <option value="30">Radar 1</option>
                                  <option value="50">Radar 2</option>
                                  <option value="90">Radar 3</option>
                                  <option value="100">Radar 4</option>
                                 
                                </select>
                           </div>
                          </td>
                    </tr>
                    
                     <tr>
                      <td align="right"><strong>Velocidad:</strong></td>
                      <td>
                        <input type="number" name="velocidad" size="5" required />
                      </td>
                     </tr>
                     
                     <tr>
                      <td align="right"><strong>Fecha y Hora :</strong></td>
                      <td>
                        <input  type="datetime-local" name="fecha_hora" size="20" />
                      </td>
                     </tr>
                     
                    
                    
                    
                    <tr>
                        <td colspan="2">
                          <div align="center"><strong>
                            <input name="insertar" type="submit" id="insertar" value="Insertar"/>
                            </strong>
                          </div>
                        </td>
                    </tr>
                    </table>
        </form>';

echo'<pre>';
var_dump($_SESSION['multas']);
echo'</pre>'; 
//para ver que funciona y lo añade
include 'pie.php';
