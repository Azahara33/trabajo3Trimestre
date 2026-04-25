<?php
session_start();
include 'conexion.php';
echo $_REQUEST["id"];
echo "<br>";

$consulta="SELECT * FROM eventos WHERE id = :id";
$resultado = $pdo-> prepare($consulta);
$ejecutado=$resultado->execute([":id" => $_GET['id']]);
if (!$ejecutado) {
    print "Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
}else{
    echo "imprimimos el registro";//Solo uno porque el id es único
    $registro = $resultado->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    

</html>
<div class="container-fluid">

    <div class="card">
        <div class="row g-0">

               <div class="con-principal .flex-column ">
            <div class="con-titulo ">
                <h1 style="text-align:center;">MODIFICAR DATOS EVENTO</h1>
            </div>
            <div class="volver">
            <a href="index.php" class="btn btn-secondary">Volver</a>
           </div>
        
        <div class="con-formulario row justify-content-center" >
            
        <form class="formulario col-md-6 max-auto border rounded" method="post" action="modificar.php">

        <div class="col">
             <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="<?php echo $registro["nombre"] ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
             
             </div>
            <div class="mb-3">
                 <label for="fecha" class="form-label">Fecha</label>
                 <input type="date" name="fecha" value ="<?php echo $registro['fecha']?>"class="form-control">
            </div>
            <div class="mb-3">
                 <label for="descripcion" class="form-label">Descripcion</label>
                 <input type="text" name="descripcion" value="<?php echo $registro['descripcion'] ?>" placeholder="Descripcion"class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                 <label for="lugar" class="form-label">Lugar</label>
                 <input type="text" name="lugar" value ="<?php echo $registro['lugar']?>"class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                 <label for="capacidad" class="form-label">Capacidad</label>
                 <input type="number" name="capacidad" value ="<?php echo $registro['capacidad']?>"class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                 <label for="id" class="form-label">ID:</label>
                 <input type="hidden" name="id" value ="<?php echo $_REQUEST['id']?>"class="form-control" id="exampleInputPassword1">
            </div>
           
            </div>

            
            <div class="volver">
           <button type ="submit" class= "btn btn-secondary">Modificar</button>
            </div>
        </form>
        </div>
    </div>

</div>
</body>
<?php
}
?>
