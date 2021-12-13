<?php


//passagem de parametros por valor

$a = 10;

function trocaValor($b)
{
    $b += 50;

    return $b;
}


echo trocaValor($a);
echo "<br />";
echo $a;


//passagem de parametros por referencia 
echo "<br />";

$aa = 10;

function trocaValor1(&$b)
{
    $b += 50;

    return $b;
}


echo trocaValor1($aa);
echo "<br />";
echo $aa;


//outro Exemplo 
echo "<br />";

$pessoa = array(
    "nome" => "Hyago Bezerra",
    "idade" => 25
);

foreach ($pessoa as &$value) {

    if (gettype($value) === 'integer') $value += 10;

    echo $value . '<br>';
}

print_r($pessoa);
