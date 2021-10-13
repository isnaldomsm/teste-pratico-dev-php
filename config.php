<?php

try {
    $db_host1 = '127.0.0.1';
    $db_username = 'root';
    $db_password = '12345678';
    $dsn = "mysql:dbname=teste_pratico;host={$db_host1}";
    $pdo = new PDO($dsn, $db_username, $db_password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
