<?php

function ola()
{
    $arguntos = func_get_args();

    echo $arguntos[0];
}

// var_dump(ola("Bom Dia"));

ola("Bom Dia");
