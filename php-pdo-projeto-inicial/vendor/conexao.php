<?php
//Recomendável uso do caminho absoluto
$caminho = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:'.$caminho);
echo 'Conectado';