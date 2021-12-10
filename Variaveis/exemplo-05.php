<?php

$nome = 'hyago';

function teste()
{
    global $nome;
    echo $nome;
}

teste();
