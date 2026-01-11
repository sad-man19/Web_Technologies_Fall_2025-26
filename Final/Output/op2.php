<?php
session_start();
$_SESSION["try"] = ($_SESSION["try"] ?? 1) + 1;
$_GET["n"] = "5";
$_POST["m"] = "4test";

$base = 15;
function process()
{
    global $base;
    static $count = 0;
    $count++;
    $sum = $base + (int) $_POST["m"] + $_GET["n"];
    echo strlen("Testing") . "\n";
    echo substr("FunctionCall", 5) . "\n";
    $arr = [$_POST["m"], 4, "5", $_SESSION["try"]];
    foreach ($arr as $x) {
        if ($x === 4) {
            echo "Strict4\n";
        } elseif ($x == 5) {
            echo "Loose5\n";
        } else {
            echo "Else\n";
        }
    }
    echo "Count:$count\n";
    $base = $_GET["n"];
}
process();
process();
?>
