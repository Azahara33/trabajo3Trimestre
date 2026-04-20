<?php
/*El objetivo de este ejercicio es crear un programa en PHP que simule un juego de dados 
para dos jugadores. En lugar de un dado, cada jugador lanzará 5 dados y se almacenarán los 
resultados en dos vectores(o listas). Después de cada tirada, el programa determinará quién gana 
según las reglas del juego y mostrará el resultado.

Lanzamiento de Dados:
Cada jugador lanzará 5 dados. Puedes usar la función rand() para simular el lanzamiento de un 
dado de seis caras (valores entre 1 y 6).
Almacena los resultados de los dos jugadores en dos vectores, una para cada jugador.

Determinación del Ganador:
Después de cada tirada, compara los resultados de ambos jugadores.
    • Suma los valores obtenidos en los 5 dados de cada jugador.
    • El jugador con la suma total más alta gana la ronda.
    • Si ambos jugadores tienen la misma suma total, la ronda se considera un empate.
Mostrar Resultados:

Después de cada ronda, muestra el resultado de esa ronda, indicando quién ganó o si hubo un empate.
Lleva un registro de las rondas ganadas por cada jugador a lo largo del juego.

Utiliza funciones en PHP para estructurar tu código y hacerlo más legible.
Proporciona una salida clara que indique los resultados de cada ronda y el progreso del juego.
*/

/*$jugador1 = [];
$jugador2 = [];*/


//$dadosJugador2 = rand (1,6);

//print "<img src='img/$dado.jpg' width='100' height='100'>\n";
/*echo "<h2>JUGADOR 1</h2>";
for ($i=0; $i < 5; $i++) { 
$dado= rand (1,6);
echo $dado;

print "<img src='img/$dado.jpg' width='100' height='100'>\n";

$jugador1[$i]=$dado;

}

echo "<br>";
echo "<br>";

var_dump($jugador1);

$resultadorJugador1= array_sum($jugador1);


print "<h3>Puntuación jugador 1:</h3>".$resultadorJugador1;


echo "<h2>JUGADOR 2</h2>";
for ($i=0; $i < 5; $i++) { 
    $dado= rand (1,6);
    echo $dado;
    
    print "<img src='img/$dado.jpg' width='100' height='100'>\n";
    
    $jugador2[$i]=$dado;
    
    }
    
    echo "<br>";
    echo "<br>";
    
    var_dump($jugador2);
    $resultadorJugador2 =array_sum($jugador2);
    echo "<br>";
    echo "<br>";

    print "<h3>Puntuación jugador 2:</h3>".$resultadorJugador2;
    

    if ($resultadorJugador1> $resultadorJugador2) {
        print "<h3> Ganador jugador 1</h3>";
    } elseif($resultadorJugador2> $resultadorJugador1) {
         print "<h3> Ganador jugador 2</h3>";
    }else{
        print "<h3> Empate</h3>";

    }*/
    
$jugador1 = [];
$jugador2 = [];
$rondaJugador1=[];
$rondaJugador2=[];
$numRondas=3;


//$dadosJugador2 = rand (1,6);

//print "<img src='img/$dado.jpg' width='100' height='100'>\n";
for($ronda=1;$ronda< 3;$ronda++){
 echo "<h2>JUGADOR 1</h2>";
 for ($i=0; $i < 5; $i++) { 
   $dado= rand (1,6);
   echo $dado;

   print "<img src='img/$dado.jpg' width='100' height='100'>\n";

   $jugador1[$i]=$dado;

 }

 echo "<br>";
 echo "<br>";

 var_dump($jugador1);

 $resultadorJugador1= array_sum($jugador1);


 print "<h3>Puntuación jugador 1:</h3>".$resultadorJugador1;


 echo "<h2>JUGADOR 2</h2>";
 for ($i=0; $i < 5; $i++) { 
    $dado= rand (1,6);
    echo $dado;
    
    print "<img src='img/$dado.jpg' width='100' height='100'>\n";
    
    $jugador2[$i]=$dado;
    
 }
    
    echo "<br>";
    echo "<br>";
    
    var_dump($jugador2);
    $resultadorJugador2 =array_sum($jugador2);
    echo "<br>";
    echo "<br>";

    print "<h3>Puntuación jugador 2:</h3>".$resultadorJugador2;
    

    if ($resultadorJugador1> $resultadorJugador2) {
        print "<h3> Ganador jugador 1</h3>";
    } elseif($resultadorJugador2> $resultadorJugador1) {
         print "<h3> Ganador jugador 2</h3>";
    }else{
        print "<h3> Empate</h3>";

    }
    
    echo "<h3><bold>Jugador 1:</bold></h3>";
  
    $rondaJugador1[]= array("puntos"=>$resultadorJugador1);

    foreach ($rondaJugador1 as $x => $y) {
        

      echo "$x:".$y["puntos"]."<br>";
    
      //echo var_dump($rondaJugador1);
    }
    
    echo "<h3><bold>Jugador 2:</bold></h3>";

    $rondaJugador2[]= array("puntos"=>$resultadorJugador2);

    foreach ($rondaJugador2 as $x => $y) {
        

      echo "$x:".$y ["puntos"]."<br>";
      //echo $y += $y;
    }
}
    
    

?>