<?php


require_once 'autoload.php';


$pdo = new PDO('sqlite:banco.sqlite');

$statement = $pdo->query('SELECT * FROM students');