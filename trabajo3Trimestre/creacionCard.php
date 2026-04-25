<?php
session_start();
include 'conexion.php';
if (isset($_REQUEST["nombre"])&&isset($_REQUEST["fecha"])&&isset($_REQUEST["descripcion"])&&isset($_REQUEST["lugar"])&&isset($_REQUEST["capacidad"])){
    if ($_REQUEST["nombre"]!== ""&&$_REQUEST["fecha"]!==""&&$_REQUEST["descripcion"]!==""&&$_REQUEST["lugar"]!==""&&$_REQUEST["capacidad"]!=="") {
        $nombre=trim(strip_tags($_REQUEST["nombre"]));
        $fecha=trim(strip_tags($_REQUEST["fecha"]));
        $descripcion=trim(strip_tags($_REQUEST["descripcion"]));
        $lugar=trim(strip_tags($_REQUEST["lugar"]));
        $capacidad=trim(strip_tags($_REQUEST["capacidad"]));
        $consulta="INSERT INTO eventos (nombre,fecha,descripcion,lugar,capacidad) VALUES(:nombre,:fecha, :descripcion,:lugar,:capacidad)";
        $resultado = $pdo-> prepare($consulta);
        $ejecutado=$resultado -> execute(
            [":nombre"=>$nombre, 
            ":fecha" =>$fecha,
            ":descripcion"=> $descripcion, 
            ":lugar"=> $lugar,
            ":capacidad"=> $capacidad
            ]
            );
            if (!$ejecutado) {
                echo "Error al insertar evento";
            }else{
                echo "EL evento se ha guardado correctamente";
            }
    }else{
        echo "Hay campos vaciós";
    }
}else {  
    echo "Faltan datos";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="con-principal .flex-column ">
        <div class="con-titulo ">
            <h1 style="text-align:center;">MODIFICAR DATOS EVENTO</h1>
        </div>
        <div class="volver">
            <a href="index.php" class="btn btn-secondary">Volver</a>
        </div>
        
        <div class="con-formulario row justify-content-center" >
            <form class="formulario col-md-6 max-auto border rounded" method="post" action="">
             <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             
             </div>
            <div class="mb-3">
                 <label for="fecha" class="form-label">Fecha</label>
                 <input type="date" name="fecha" class="form-control">
            </div>
            <div class="mb-3">
                 <label for="descripcion" class="form-label">Descripcion</label>
                 <input type="text" name="descripcion" placeholder="Descripcion"class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                 <label for="lugar" class="form-label">Lugar</label>
                 <input type="text" name="lugar" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                 <label for="capacidad" class="form-label">Capacidad</label>
                 <input type="number" name="capacidad"class="form-control" id="exampleInputPassword1">
            </div>
           
            <button type="submit" class="btn btn-secondary mb-2 ">Dar de alta evento</button>
            </form>
        </div>

    </div>
</body>
</html>