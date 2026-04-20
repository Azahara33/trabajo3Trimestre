<?php
session_start();

if (isset($_REQUEST["usuario"])) 
if (isset($_REQUEST["contrasena"])) 
{
   $_SESSION["usuario"]=$_REQUEST["usuario"];
   $_SESSION["contrasena"]=$_REQUEST["contrasena"];
}
 




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body >
  <div class="position-absolute bottom-50 end-50">
 <form class="border border-1 p-3" action="#" method="POST"  >
   
    <div class="">
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" class="form-control" name="usuario">
    
    </div>
 
  
    <div class="">
    <label for="contrasena" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="contrasena" id="exampleInputPassword1">
    </div>
    <br>
  
  
   <button type="submit" class="btn btn-primary ">Loging</button>
   <br>
   <?php
   
 
   if (isset($_SESSION["usuario"])&&($_SESSION["contrasena"])) {
   
    
    header("Location: dashboard.php");
  
    
   } else {
    
    print "Rellene el usuario y la contraseña";
   }
     
   ?>

  

 
 </form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>