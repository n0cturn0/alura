<?php
//Orden
$notas = [ 
    [
    'aluno' => 'Maria',
    'nota'  => 7.5,
    ],
    [
    'aluno' => 'João',
    'nota'  => 8.5,
    ],
    [
    'aluno' => 'José',
    'nota'  => 9.5,
    ],
   
];

function ordenaNotas($nota1, $nota2)
{
    //return $nota1['nota'] <=> $nota2['nota'];
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }
    return 0;
}

//gettype verificas o tipo de variavel
if (gettype($notas) == 'array') {
 echo 'É um array';
}
function funcao(array $valor)
{
    echo 'É um array';
}

//Busca em chave do array
array_key_exists( 'aluno', $notas);
//Busca valores em array
in_array('Maria', $notas);
//Retorna a chave do array
array_search(10, $notas);
//Compara dois arrays e mostra a diferença, leva em consideração os valores, nao as chaves
array_diff($notas, $notas2);
//Compara dois arrays e mostra a diferença, leva em consideração as chaves e os valores
array_diff_assoc($notas, $notas2);
//Uni dois arrays
array_merge($notas, $notas2); 
//array3 = array1 + array2
//array unpack ....
$array3 = [...$array1, ...$array2];
$array3 = [...$array1, 'Outro aluno', ...$array2];

