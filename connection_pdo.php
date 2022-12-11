<?php
try {
    $pdo = new PDO('mysql:host=localhost:8889;dbname=ToDoList', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection échoué : '.$e->getMessage();
}
