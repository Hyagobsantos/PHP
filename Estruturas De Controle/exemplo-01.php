<?php

$qualEhSuaIdade = 26;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualEhSuaIdade < $idadeCrianca) {
    echo 'Criança';
} else if ($qualEhSuaIdade < $idadeMaior) {
    echo 'Adolescente';
} else if ($qualEhSuaIdade < $idadeMelhor) {
    echo "Adulto";
} else {
    echo "idoso";
}

echo "<br>";
echo $qualEhSuaIdade < 18 ? "Menor de Idade" :  "Maior de Idade";
