<?php
// Definición de la función prueba()
function prueba()
{
    // Intentamos escribir el valor de la variable $a
    // pero como no está definida, se produce un aviso
    print "<p>La variable a es $a.</p>\n";
    print "\n";
}

// Damos un valor a la variable
$a = 100;
print "<p>La variable a es $a.</p>\n";
print "\n";
// Llamamos a la función
prueba();
// Volvemos a escribir la variable
print "<p>La variable a es $a.</p>\n";
?>