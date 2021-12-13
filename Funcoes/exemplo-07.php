<?php


//funcoes anonimas não tem return

function teste($callback)
{
    //processo lento 
    $callback();
};

teste(function () {
    echo "Terminou";
});

echo "<br />";
//outro exemplo 

$fn = function ($a) {
    var_dump($a);
};


$fn("oi");
