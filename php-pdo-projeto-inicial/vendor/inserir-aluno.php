<?php

use Alura\Pdo\Domain\Model\Student;
require_once 'autoload.php';

$caminho = 'banco.sqlite';
$pdo = new PDO('sqlite:'. $caminho);




$student = new Student(null, 'teste', new \DateTimeImmutable('1997-10-15'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

var_dump($pdo->exec($sqlInsert));