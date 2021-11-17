<?php
session_start();
include 'head.php';

if(isset($_REQUEST['borrar'])) //si he pulsado borrar
{
  $Matricula=$_REQUEST['matricula'];
  //numero elementos en el array antes de borrar
  $contadormultas_antes=count($_SESSION['multas']);
  
  foreach($_SESSION['multas'] as $clave=>$valor)
    {     
    if($valor['matricula']==$Matricula)
      {
      unset($_SESSION['multas'][$clave]);
      }
    }
  

  $contadormultas_despues=count($_SESSION['multas']);
  if($contadormultas_antes==$contadormultas_despues)
  {
      echo '<script>alert("No está esa multa registrada");</script>';
  }
  else
  {
    foreach($_SESSION['multas'] as $clave=>$valor)
    {     
    if($valor==$Matricula)
    unset($_SESSION['multas'][$Matricula]);
    }
      echo '<script language="javascript">';
      echo 'alert("Multa borrada con exito");';
      echo '</script>';
  }
  
}


echo' 
Introduce los datos de la Multa a Borrar<mark>(1.5 Puntos)<br><br>
                         
<div   class="postcontent"><form action="borrar.php" method="post">
<table align="center" class="content-layout">
  
  
  <tr>
  <td align="right">
  <strong>Matricula :</strong></td><td>
  <div align="left">
        <input type="text" name="matricula" size="10"/>
  </div>
  </td>
  </tr>
  <tr>
    <td align="right"><strong>Fecha y Hora :</strong></td>
     <td>
        <input  type="datetime-local" name="fecha_hora" size="20" />
     </td>
  </tr>
  
  <tr ><td colspan="2"><div align="center"><strong>
<input name="borrar" type="submit"  value="Borrar Multa"/>
</strong></div></td></tr>
</table>
</form>
</div>';        
include 'pie.php';

