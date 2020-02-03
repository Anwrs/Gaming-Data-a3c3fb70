<?php

$arr[] =  [$y = "Call of Duty", "Shooter", $a = 59.95];

$arr[] = [$x = "Rocket League", "Sport", $b = 19.95];

$arr[] = [$z = "Assassins Creed", "RP", $c = 49.95];



var_dump($arr);

echo "----------------------------------------------------------" . PHP_EOL;

$t = $a + $b + $c;
$d = $t / 3;

echo "Gemiddelde prijs: €" . number_format(round($d, 2), 2) . PHP_EOL;

$tel = strlen($y) + strlen($x) + strlen($z);
$tels = $tel / 3;

echo "Gemiddelde lengte van de titel: " . number_format(round($tels, 2), 0) . " karakters";


