<?php
$_GET["add"] = "7";
$records = [
    "Liam" => 13,
    "Noah" => 27,
    "Olivia" => 35,
    "Emma" => 44,
    "Ava" => 58,
    "Sophia" => 62,
    "Isla" => 79,
    "Mia" => 84,
    "Amelia" => 91,
    "Ethan" => 25,
];
function mystery($arr, $x)
{
    $i = 1;
    foreach ($arr as $name => $score) {
        $total = (int) $score + (int) $x;
        switch ($i) {
            case 1:
                echo strlen($name) . "\n";
                break;
            case 2:
                echo substr($name, 1) . "\n";
                break;
            case 3:
                echo strtoupper($name) . "\n";
                break;
            case 4:
                echo strrev($name) . "\n";
                break;
            case 5:
                echo $total / 5 . "\n";
                break;
            case 6:
                echo $total % 8 . "\n";
                break;
            case 7:
                echo ($total > 80 ? "PASS" : "FAIL") . "\n";
                break;
            case 8:
                echo gettype($total) . "\n";
                break;
            case 9:
                echo $score + $i . "\n";
                break;
            case 10:
                echo implode("_", str_split($name)) . "\n";
                break;
        }
        $i++;
    }
}
mystery($records, $_GET["add"]);
?>
