<?php

$operator = readline("welke operatie wil je uitvoeren (+, -, %) ");

if ($operator != "+" && $operator != "-" && $operator != "%") {
    echo "is geen geldige operatie ";
    exit();
}

$eerste = readline("Eerste getal? ");
$tweede = readline("Tweede getal? ");

if (!is_numeric($eerste) || !is_numeric($tweede)) {
    echo "is geen getal";
    exit();
}


$eerste = intval($eerste);
$tweede = intval($tweede);

if ($operator == "+") {
    $resultaat = $eerste + $tweede;
    echo "Uw resultaat is: $resultaat";
} elseif ($operator == "-") {
    $resultaat = $eerste - $tweede;
    echo "Uw resultaat is: $resultaat";
} elseif ($operator == "%") {
    $resultaat = $eerste % $tweede;
    echo "Uw resultaat is: $resultaat";
}




?>