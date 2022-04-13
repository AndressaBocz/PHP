<?php

$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
$operacao = $_GET["operacao"];

if ($operacao == "somar") {
    echo $numero1 + $numero2;
} else if ($operacao == "subtrair") {
    echo $numero1 - $numero2;
} else if ($operacao == "multiplicar") {
    echo $numero1 * $numero2;
} else {
    echo $numero1 / $numero2;
}