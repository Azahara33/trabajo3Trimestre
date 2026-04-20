<?php
/*Escribe un programa que muestre en tres columnas: 
Numero -  cuadrado -  cubo
De 5 numeros aletorios entre 5 y 20.*/

$numAleatorio= rand(5,20);
print $numAleatorio;
$numCuadrado = $numAleatorio ** 2;
$numCubo=$numAleatorio ** 3;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="divPrincipal d-flex justify-content-evenly">
        <div class="border border-secondary"><?php print $numAleatorio;?></div>
        <div class="border border-secondary"><?php print $numCuadrado;?></div>
        <div class="border border-secondary"><?php print $numCubo;?></div>

    </div>

    
</body>
</html>