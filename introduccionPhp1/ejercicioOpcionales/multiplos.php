<?php
/*1.- Muestra los números múltiplos de 5 de un bucle de 0 a 100 utilizando while*/

$numero=0;

/*while ($numero <= 100) {
    $numMultiplo=$numero/5;
    if ($numMultiplo=0) {
        print $numMultiplo;
    }
}*/
$numero=0;

 while ($numero <= 100) {
    
    if ($numero % 5==0) {
        print $numero.",";
    }
    $numero++;
 }



?>