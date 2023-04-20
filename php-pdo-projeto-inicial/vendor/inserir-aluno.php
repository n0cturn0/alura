<?php

use Alura\Pdo\Domain\Model\Student;
require_once 'autoload.php';

$caminho = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:banco.sqlite');



$student = new Student(null,'Luiz Augusto', new \DateTimeImmutable('1997-10-15'));
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}','{$student->birthDate()->format('Y-m-d')}');";

var_dump($pdo->exec($sqlInsert));