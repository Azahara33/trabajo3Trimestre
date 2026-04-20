<?php
session_start();
$usuario=$_SESSION["usuario"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class=" row container-fluid b">
         <div class=" col-12 container-fluid">
            <h2><?php print "¡Hola!,".$usuario;?></h2>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
         <div class="container-fluid">
             <a class="navbar-brand" href="index.php">Index</a>
            </div>
         </nav>
    </div>
    <?php
        if (!isset ($usuario)) {
            header("Location: login.php");
        }
    ?>

    
</body>
</html>