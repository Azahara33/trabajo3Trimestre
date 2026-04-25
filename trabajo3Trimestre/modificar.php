<?php
include 'conexion.php';
echo "<a href='index.php' >Volver</a>";
echo $_REQUEST["id"];
echo "<br>";
echo $_REQUEST["id"];
echo "<br>";
if (isset($_REQUEST["nombre"])&&isset($_REQUEST["fecha"])&&isset($_REQUEST["descripcion"])&&isset($_REQUEST["lugar"])&&isset($_REQUEST["capacidad"])){
    if ($_REQUEST["nombre"]!== ""&&$_REQUEST["fecha"]!==""&&$_REQUEST["descripcion"]!==""&&$_REQUEST["lugar"]!==""&&$_REQUEST["capacidad"]!=="") {
        $nombre=trim(strip_tags($_REQUEST["nombre"]));
        $fecha=trim(strip_tags($_REQUEST["fecha"]));
        $descripcion=trim(strip_tags($_REQUEST["descripcion"]));
        $lugar=trim(strip_tags($_REQUEST["lugar"]));
        $capacidad=trim(strip_tags($_REQUEST["capacidad"]));

        $consulta="UPDATE eventos
        SET nombre=:nombre, fecha=:fecha,
        descripcion=:descripcion,lugar=:lugar,
        capacidad=:capacidad
        WHERE id=:id";

        $resultado = $pdo-> prepare($consulta);
        $ejecutado=$resultado -> execute(
            [":nombre"=>$nombre, 
            ":fecha" =>$fecha,
            ":descripcion"=> $descripcion, 
            ":lugar"=> $lugar,
            ":capacidad"=> $capacidad,
            ":id" => $_REQUEST["id"]
            ]
            );
            if (!$ejecutado) {
                echo "Error al modificar evento";
            }else{
                echo "El evento se ha modificado correctamente";
            }
    }else{
        echo "Hay campos vacíos";
    }
}else {  
    echo "Faltan datos";
}
?>