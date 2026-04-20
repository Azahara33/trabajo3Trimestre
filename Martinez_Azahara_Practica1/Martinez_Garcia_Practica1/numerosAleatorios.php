<?php

$alto= rand(5,15);
print "alto:".$alto."<br>";
$ancho= rand(5,15);
print "ancho:". $ancho. "<br>";

echo "<br>";
echo "<br>";

for ($i=0; $i<$alto ; $i++) { 
    for ($j=0; $j<$ancho ; $j++) { 
        echo "*";
    }
    echo "<br>";
}
?>
