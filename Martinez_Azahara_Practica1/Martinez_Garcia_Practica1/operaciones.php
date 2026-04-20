<?php
if ($_REQUEST["numero1"] == "") {
print "<p>Falta el primer número</p>";
} else {
$primerNumero1=trim(strip_tags($_REQUEST["numero1"]));
echo  "Primer número :".$primerNumero1;
echo "<br>";
echo "<br>";
}
/*$primerNumero1=trim(strip_tags($_REQUEST["numero1"]));
echo  "Primer número :".$primerNumero1;
echo "<br>";
echo "<br>";*/
if ($_REQUEST["numero2"] == "") {
print "<p>Falta el segundo número</p>";
} else {
    $primerNumero2=trim(strip_tags($_REQUEST["numero2"]));
echo "Segundo número :".$primerNumero2;
$operacion=$_REQUEST["operacion"];
echo "<br>";
echo "<br>";

}
/*$primerNumero2=trim(strip_tags($_REQUEST["numero2"]));
echo "Segundo número :".$primerNumero2;
$operacion=$_REQUEST["operacion"];
echo "<br>";
echo "<br>";*/
switch ($operacion) {
    case 'suma':
       
        $resultadoSuma=$primerNumero1+$primerNumero2;
        echo $resultadoSuma;
        break;
    
    case 'resta':
        
        $resultadoResta=$primerNumero1-$primerNumero2;
        echo "Resultado:".$resultadoResta;
        break;
    case 'multiplicacion':
        
        $resultadoMultiplicacion=$primerNumero1*$primerNumero2;
         echo "Resultado:".$resultadoMultiplicacion;
        break;
    case 'division':
        
        $resultadoDivision=$primerNumero1/$primerNumero2;
        echo "Resultado:".$resultadoDivision;
        break;
                            
    default:
        echo "No cuicide la operación";
        break;
}



?>