<?php
/*Muestra la tabla de multiplicar de un número generado de
manera aletoria entre 1 y 10. El resultado en formato <table>
*/ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
  <tr>
    <th>Tablas </th>
    <th>multiplicar</th>
  </tr>
  <tr>
    <?php
      $multiplicador= rand(0,10);

        for ($i=0; $i <10 ; $i++) { 
         $producto=$multiplicador*$i;
         
         print "<td>$multiplicador</td>";
       
         print "<td>X</td>";
         print "<td>$i</td>";
         print "<td>=</td>";
         print "<td>$producto</td>";


    }
    
    ?>
    </tr>
    
     
</table> 
    
</body>
</html>



    



