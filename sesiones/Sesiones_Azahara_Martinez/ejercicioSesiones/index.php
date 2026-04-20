<?php

session_start();
if (isset($_REQUEST["usuario"])) // comprueba si le ha llegado usuario via formulario
 {
   $_SESSION["usuario"]=$_REQUEST["usuario"];
   
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <h1>Estás en el index</h1>
     <div class="container d-flex, justify-content-center align-items-center">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
         <div class="container-fluid">
             <a class="navbar-brand" href="dashboard.php">Dashbord</a>
         </div>
        </nav>
     </div>
    
    <?php
    if (!isset($_SESSION["usuario"])) {
        echo "<p><a class='link-opacity-75' href='login.php'>Ir a login</a></p>";
    }else {
        echo "hola!".$_SESSION["usuario"];
        echo "<br>";
        echo "Este contenido sólo se puede ver si estás logueado";
        echo "<br>";
        echo "<span class='border border-primary p-1 bg-primary'><a class='link-opacity-100 text-light' href='logout.php'>Salir</a></span>";
    }

    ?>
    
    
</body>
</html>