<?php
include "conexion.php";
echo "<div><a href='index.php'>Volver</a></div>";

if (isset($_REQUEST["id"])) {
    if ($_REQUEST["id"]!== "") {
        echo "id:".$_REQUEST["id"];
        echo "<br>";
        $consulta="DELETE FROM eventos  WHERE id = :id";
        $resultado = $pdo -> prepare($consulta);
        $ejecutado = $resultado -> execute([":id" => $_REQUEST["id"]]);
        if ($ejecutado) {
            echo "El registro se ha eliminado correctamente";
        }else{
            echo "Error en ejecutar la consulta";
        }
    }else{
        echo "Variable está vacía";
    }
    
}
?>