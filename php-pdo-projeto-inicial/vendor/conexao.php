<?php
//Recomendável uso do caminho absoluto
// $caminho = __DIR__ . '/banco.sqlite';
// $pdo = new PDO('sqlite:'.$caminho);
// echo 'Conectado';

// // $pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');
// var_dump($pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT)'));


try {
    $pdo = new PDO('sqlite:banco.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
  }


  

try {
  $sql = "CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT)";

  $pdo->exec($sql);
  echo "Tabela criada com sucesso!";
} catch(PDOException $e) {
  echo "Falha na criação da tabela: " . $e->getMessage();
}