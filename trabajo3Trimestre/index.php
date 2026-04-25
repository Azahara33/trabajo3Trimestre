<?php
session_start();

if (isset($_SESSION["nombre"])&&$_SESSION["nombre"]!=="") {
    $nombreArchivo = $_SESSION["nombre"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<body>
</head>
<body>
    <div>
         <div class="titulo text-center">
            <h1>Agenda de eventos tecnólogicos</h1>
         </div>
        <div class="sesion row d-flex mb-3 border border-primary">
            
            <div class="bienvenida col-6 border border-primary"><?php echo $nombreArchivo?></div>
            <div class="salirSesion col-6 border border-primary"><nav><a href="logout.php" class="">Salir</a></nav></div>
            
        </div>
        <div class="creacionCard mb-3 border border-primary">
            <nav><a href="creacionCard.php" class="btn  btn-secondary"> Crear Evento</a></nav>
        </div>
       
        <div class="contenedor_Card">
            <?php include 'includes/card.php'?>
        </div>
    </div>
    
</body>
</html>