<?php

$cfg["mysqlHost"] = "localhost";
$cfg["mysqlDatabase"] = "eventos_tech";
$cfg["mysqlUser"] = "root";
$cfg["mysqlPassword"] = "";

function conectaDb()
{
    global $cfg;

    try {
        $tmp = new PDO(
            "mysql:host={$cfg['mysqlHost']};dbname={$cfg['mysqlDatabase']};charset=utf8mb4",
            $cfg["mysqlUser"],$cfg["mysqlPassword"]
        );

        return $tmp;

    } catch (PDOException $e) {
        print "Error: No puede conectarse con la base de datos. {$e->getMessage()}";
        exit;
    }
}

$pdo = conectaDb();

?>