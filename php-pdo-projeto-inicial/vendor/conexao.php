<?php
//Recomendável uso do caminho absoluto
$caminho = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:'.$caminho);
echo 'Conectado';

$pdo->exec('CREATE TABLE students(id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT;)');