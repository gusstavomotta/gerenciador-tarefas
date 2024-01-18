<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=tasks', 'root', '');
    echo 'Conectado';
} catch (PDOException $e) {
    echo "Erro ao se conectar: Erro " . $e->getMessage();
}
