<?php
$operacio = $_POST['op'];
$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];

function calcular($operacio, $numero1, $numero2) {
    if ($operacio == "s") {
        return $numero1 + $numero2;
    } else if ($operacio == "r") {
        return $numero1 - $numero2;
    } else if ($operacio == "d") {
        if ($numero2 != 0) {
            return $numero1 / $numero2;
        }
        return "Error: divisió per zero";
    } else if ($operacio == "m") {
        return $numero1 * $numero2;
    } else {
        return "Error: operació desconeguda";
    }
}

echo calcular($operacio, $numero1, $numero2);
?>
