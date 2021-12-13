<?php

function soma(int ...$valores):string {
    return array_sum($valores);
}


echo soma(2, 2);
echo "<br/>";
echo soma(35, 25);
echo "<br/>";
echo soma(1.5, 33);
echo "<br/>";
