<?php

$operacio = $_POST['op'];
$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];

switch ($operacio) {
    case "s":
        $res = $numero1 + $numero2;
        break;

    case "r":
        $res = $numero1 - $numero2;
        break;

    case "m":
        $res = $numero1 * $numero2;
        break;

    case "d":
        if ($numero2 != 0) {
            $res = $numero1 / $numero2;
        } else {
            $res = "Error: no es pot dividir per zero";
        }
        break;

    default:
        $res = "Error: operació desconeguda";
        break;
}

echo $res;

?>
