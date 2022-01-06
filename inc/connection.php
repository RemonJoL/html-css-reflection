<?php
try{
    $db = new PDO("mysql:host=127.0.0.1;dbName=netmatters", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $db;
} catch (Exception $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    exit;
}
