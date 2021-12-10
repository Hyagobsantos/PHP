<?php


// $nome = 'hyago bezerra';

// $nome = strtoupper($nome);

// echo $nome;

// $nome = strtolower($nome);

// echo $nome;

// $nome = ucwords($nome);
// $nome = ucfirst($nome);


$empresa = 'Hcode';
$empresa = str_replace('o', '0', $empresa);

$frase = "A repetição é a mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, $palavra);

$texto = substr($frase, $q + strlen($palavra), strlen($frase));

echo $texto;
