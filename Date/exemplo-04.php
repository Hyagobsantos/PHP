
<?php

$date = new DateTime();

$pediodo = new DateInterval("P15D");

echo $date->format("d/m/y H:i:s");

$date->add($pediodo);

echo "<br/>";
echo $date->format("d/m/y H:i:s");
