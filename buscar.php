<?php
session_start();
include 'head.php';

if(isset($_REQUEST['buscar']))
{
  
$matricula=$_REQUEST['matricula'];
$buscar=false;//creamos una variable igualada a false para que si luego esta en el array sea true, y poner un if

foreach($_SESSION['multas'] as $clave)
  {
  if($clave['matricula'] == $matricula)
    {
    echo "<br>";
    echo "Le has puesto una multa a: (".$matricula.") ";
    echo "<br>";
    $buscar=true;
    }
  }

  if($buscar==false)
    {    
      echo "No está la multa en el Registro de multas";
    }
}

echo' 
Introduce la Matricula de la Multa/s <mark> NO PAGADAS</mark> a Buscar<mark>(1 Puntos)<br><br>
                         
<div   class="postcontent"><form action="buscar.php" method="post">
<table align="center" class="content-layout">
  
  
  <tr>
    <td align="right">
      <strong>Matricula :</strong></td><td>
      <div align="left">
        <input type="text" name="matricula" size="10"/>
      </div>
    </td>
  </tr>
 
  
  <tr ><td colspan="2"><div align="center"><strong>
<input name="buscar" type="submit" id="buscar" value="Buscar"/>
</strong></div></td></tr>
</table>
</form>
</div>';   

/*
echo'<pre>';
var_dump($_SESSION['multas']);
echo'</pre>';
*/

include 'pie.php';