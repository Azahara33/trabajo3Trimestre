<?php
session_start();
    if (isset($_REQUEST["nombre"])&&isset($_REQUEST["contrasena"])) {
        if ($_REQUEST["nombre"]!==""&&$_REQUEST["contrasena"]!=="") {
            $nombre=trim(strip_tags($_REQUEST["nombre"]));
            $contrasena= trim(strip_tags($_REQUEST["contrasena"]));
            $registroNombre= "registroNombre.txt";
            if (!file_exists($registroNombre)) {
               $fich= fopen($registroNombre,"r");
            }
                $fich= fopen($registroNombre,"r");
                $comprobado = false;
                while (($linea= fgets($fich)) !== false) {
                   $arrayDatos= explode(":",$linea);
                   $nombreArchivo = $arrayDatos[0];
                   $contrasenaArchivo = $arrayDatos[1]; 
                   var_dump($arrayDatos);
                   if ($nombre==$nombreArchivo&&$contrasena==trim($contrasenaArchivo)) {
                    $comprobado = true;
                    $_SESSION["nombre"]=$nombreArchivo;
                  
                   }

                }
                if ($comprobado) {
                    
                    header("Location:index.php");
                }else{
                    echo "No existe el nombre o la contraseña";
                }
               
                fclose($fich);
                
            
        }else{
            echo "Es obligatorio rellenar todos los campos";
        }
        
    }else{
        echo "No exiten variables";
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
            <h1 style="text-align:center;">LOGIN</h1>
        </div>
        <div class="con-formulario row justify-content-center" >
            <form method="post" action=""class="formulario col-md-6 max-auto border rounded" >
             <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" aria-describedby="emailHelp">
            
             </div>
            <div class="mb-3">
                 <label for="contrasena" class="form-label">Password</label>
                 <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1">
            </div>
            
           
           
            <button type="submit" class="btn btn-secondary mb-2 ">Entrar</button>
            </form>
        </div>
        <nav><a href="registro.php">¿Estás registrado?</a></nav>

    </div>
</body>
</html>