<?php
session_start();
$_SESSION["usuario"];
unset($_SESSION["usuario"]);
session_destroy();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
}else{
    print "La sesión no ha sido destruida";
    print "<br>";
    print $_SESSION["usuario"];
}
?>