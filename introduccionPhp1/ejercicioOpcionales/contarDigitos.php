
<?php
/*Realiza un programa que nos diga cuántos dígitos tiene un número 
aletorio entre (0 y 9999). Mostrar el número y 
a cantidad de digitos.*/
$numAleatorio = rand(0,9999);
print $numAleatorio;
$numAleatorio= (string)$numAleatorio;
print "<br>";
$arrayNum = str_split($numAleatorio);
$lenght=count($arrayNum);
print $lenght;
/*for ($i=0; $i < $numAleatorio; $i++) { 
    $romperArray=
    $arrayNum[$i]=$numAleatorio;
   
    //$sumaElementos= count($numAleatorio);
    //var_dump($arrayNum);
    
}
var_dump($arrayNum);
$
 $lenght=count($arrayNum);
 //var_dump($resultado);
 print "resultado".$lenght;*/
    
?>