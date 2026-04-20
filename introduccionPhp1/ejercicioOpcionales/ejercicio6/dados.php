
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>JUGADOR 1</h2>
    <?php
/*n programa que genere 2 tiradas de 3 dados
(simulando 2 jugadores). 
Muestre las dos tiradas y me diga cual tiene mayor 
puntuación(sumando las tiradas): Fichero de dados: 
dados.zip*/
 for ($i=0; $i < 2; $i++) { 
    $numAleatorio = rand(1,6);
    print $numAleatorio. "<br>";
    
    
    print  '<img  src="dados-1/'.$numAleatorio.'.jpg" alt="dado">';
    print "<br>";
    
    $resultadoJugador1 += $numAleatorio;

 }
 print "éste es el resultado del jugador 1:".$resultadoJugador1;

  ?> 
 
  <h2>JUGADOR 2</h2>
  <?php

 for ($i=0; $i < 2; $i++) { 
    $numAleatorio = rand(1,6);
    //print $numAleatorio. "<br>";
    
    print  '<img  src="dados-1/'.$numAleatorio.'.jpg" alt="dado">';
    print "<br>";
    $resultadoJugador2+= $numAleatorio;

 }
 
   ?> 
    <h3>Resultado jugador 1:</h3>
  <?php
  
  print $resultadoJugador1;
  ?>
   <h3>Resultado jugador 2:</h3>
    <?php
  
  print $resultadoJugador2;
  ?>
   
  <h2>Ganador:</h2>
  <?php
  if ($resultadoJugador1>$resultadoJugador2) {
    print "¡Ganador jugador 1!";
  }elseif ($resultadoJugador1<$resultadoJugador2){
    print "¡Ganador jugador 2!";
  }  else {
    print "empate";
  }
  
  
  ?>
</body>
</html>

