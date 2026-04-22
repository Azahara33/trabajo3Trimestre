<?php

include 'conexion.php';
$consulta="SELECT * FROM eventos";
$resultado = $pdo-> query($consulta);
if (!$resultado) {
    print "Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
}else{
    echo "imprimimos los datos";
    foreach( $resultado as $registro){
  
?>
<div class="container-fluid">

    <div class="card">
        <div class="row g-0">

            <div class="col">
                <div class="card-header">
                    Nombre:<?php echo $registro['nombre']?>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Fecha:<?php echo $registro['fecha'] ?></li>
                    <li class="list-group-item">Descripcion:<?php echo $registro['descripcion']?></li>
                    <li class="list-group-item">Lugar:<?php echo $registro['lugar']?></li>
                    <li class="list-group-item">Capacidad:<?php echo $registro['capacidad']?></li>
                    <li>
                        <?php echo $registro["id"]?>
                    </li>
                </ul>
            </div>

            <div class="col-auto d-flex flex-column justify-content-center align-items-end pe-3">
                
                    <a href="modificacionCard.php?id=<?php echo $registro['id'];?>" ><i class="bi bi-pencil btn btn-warning fs-4 mb-2"></i></a>
                
                <i class="bi bi-trash3 btn btn-danger fs-4"></i>
            </div>

        </div>
    </div>

</div>
<?php 

}
}
?>