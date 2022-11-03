<?php

    function printHelloWorld(){
        echo 'Hello World!<br>';
    }
    function greet($name){
        echo 'Hello, ' . $name . '<br>';
    }
    function addTwoNumber($n1, $n2){
        echo 'The sum is: ' . ($n1 + $n2) . '<br>';
    }
    function printReapet($strToPrint = "", $numOfReps = 1){
        for($i = 0; $i < $numOfReps; $i++)
            echo $strToPrint;
    }
    function getRecArea($h = 0, $w = 0){
        return $h * $w;
    }
    function squareNumber($num){
        return $num * $num;
    }
    function test(){ 
        $greet = "Hello World!"; // local variable
        global $testNum;            //global variable
        echo  $greet . '<br>';
        echo $testNum;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Demo</title>
</head>
<body>
    <?php
        // printHelloWorld();
        // greet("Joemar");
        // addTwoNumber(10, 20); 
        // printReapet("*", 10);
        // echo 'The area is: ' . getRecArea(5, 4);
        // $x = 4
        // echo $x . '<br>';
        // echo squareNumber(&$x);
        // echo '<br>' . $x;

        test();
        $testNum = 10;
        echo $greet;
    ?>
    
</body>
</html>