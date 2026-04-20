<?php

$registroNombre= "registroNombre.txt";
if (!file_exists($registroNombre)) {
    $fich= fopen($registroNombre,"a");
}
   
   if (isset($_REQUEST["nombre"])&&isset($_REQUEST["contrasena"])&&isset($_REQUEST["seguridadContrasena"])) {
    if ($_REQUEST["nombre"]!==""&&$_REQUEST["contrasena"]!==""&&$_REQUEST["seguridadContrasena"]!=="") {
        $nombre= trim(strip_tags($_REQUEST["nombre"]));
        $contrasena= trim(strip_tags($_REQUEST["contrasena"]));
        $seguridadContrasena= trim(strip_tags($_REQUEST["seguridadContrasena"]));
        if ($seguridadContrasena!==$contrasena) {
         echo "Las contraseñas no coinciden";
        }else{
        $fich= fopen($registroNombre, "a");
        fputs($fich,$nombre.":".$contrasena.PHP_EOL);
        echo "Registró el usuario con éxito";
        fclose($fich);
        }
        
    }else{
        echo "Tiene que rellenar todos los campos";
    }
   }else{
    echo "Las variables no existen";
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<body>
    <div class="con-principal .flex-column ">
        <div class="con-titulo ">
            <h1 style="text-align:center;">REGISTRO</h1>
        </div>
        <div class="con-formulario row justify-content-center" >
            <form class="formulario col-md-6 max-auto border rounded" method="post" action="" >
             <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             
             </div>
            <div class="mb-3">
                 <label for="contrasena" class="form-label">Password</label>
                 <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                 <label for="seguridadContrasena" class="form-label">Repita el password</label>
                 <input type="password" name="seguridadContrasena" class="form-control" id="exampleInputPassword1">
            </div>
           
            <button type="submit" class="btn btn-secondary mb-2 ">Registrarse</button>
            </form>
        </div>

    </div>
</body>
</html>