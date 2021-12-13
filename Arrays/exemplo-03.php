<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20
));


array_push($pessoas, array(
    'nome' => 'Hyago',
    'idade' => 26
));

echo json_encode($pessoas);


$json = '[{nome: "João",idade: 20},{nome: "Hyago",idade: 26}]';

$data = json_decode($json);

var_dump($data);
