<?php

use function PHPSTORM_META\map;

define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;

echo "<br>";

define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
], true); //true torna a chamada da constante insensitive

print_r(BANCO_DE_DADOS);

echo "<br>";

echo PHP_VERSION;
echo DIRECTORY_SEPARATOR;
