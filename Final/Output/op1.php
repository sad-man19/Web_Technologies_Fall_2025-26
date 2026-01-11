<?php
session_start();

$_SESSION["step"] = $_SESSION["step"] ?? 2;
$_GET["a"] = "3";
$_POST["b"] = "8xyz";
$score = 20;
function check()
{
    global $score;
    static $run = 0;
    $run++; //0 becomes 1 and so on
    $total = $score + (int) $_POST["b"] + $_GET["a"];
    echo strlen("Evaluate") . "\n";
    echo substr("Performance", 4) . "\n"; //starts cutting from 4th index
    $vals = [$_POST["b"], 8, "3", $_SESSION["step"]];
    foreach ($vals as $v) {
        if ($v === 8) {
            echo "Exact\n";
        } elseif ($v == 3) {
            echo "Match\n";
        } else {
            echo "Other\n";
        }
    }
    echo "Run:$run\n";
    $score = $_GET["a"]; //score becomes 3
}
check();
check();
?>
