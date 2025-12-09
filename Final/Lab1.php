<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1</title>
</head>
<body>
    <h1>Introductory PHP</h1>
<!--ex1 -->
    <h2>calculate the area and perimeter of a Rectangle</h2>
    <?php
    //echo "Hello World";
    $length = 5.3;
    $width = 10.4;

    echo "Length: " . $length . "<br>Width: " . $width . "<br><br>";
    $rectangle = $length * $width;
    echo "Rectangle = " . $rectangle . "<br>";

    $perimeter = 2 * ($length + $width);
    echo "Perimeter = " . $perimeter;
    ?>
<!--ex2 -->
    <h2>calculate the VAT (Value Added Tax) </h2>
    <?php
    echo "VAT calculator<br>";
    $amount = 10000;
    $vat = $amount * 0.15;
    echo " The VAT for " . $amount . " taka is " . $vat . " taka";
    ?>

<!--ex3 -->
    <h2>odd or even</h2>
    <?php
        //echo "ODD EVEN Checker<br>";
        $num = 101;
        echo "Given number: " . $num . "<br>";
        if($num % 2 == 0){
            echo "The number is Even";
        }else{
            echo "The number is Odd";
        }
    ?>

<!--ex4 -->
    <h2>find the largest number </h2>
    <?php
    $x = 20;
    $y = 4;
    $z = 6;

    echo "X: ". $x . "<br>Y: " . $y . "<br>Z: " . $z . "<br>";
    if($x>$y && $x>$z){
        echo "X is greater!";
    }elseif($y>$x && $y>$z){
        echo "Y is greater!";
    }else{
        echo "Z is greater!";
    }
    ?>

<!--ex5 -->
    <h2>print all the odd numbers between 10 to 100 </h2>
    <?php
    $num1 = 10;
    $num2 = 100;
    for($i = $num1; $i<$num2; $i++){
        if($i %2 != 0){
            echo $i . " , ";
        }
    }
    ?>
</body>
</html>