<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "admin";
$dbpass = "admin";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
        
} catch (PDOException $e) {
    echo "Falhou a conexão: ".$e->getMessage();
}

?>