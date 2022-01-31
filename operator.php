<?php
//assignment operator
$num1=50;
$num2=100;
echo $num2+$num1; //addition
echo"<br>";
echo $num2-$num1; // subtraction
echo"<br>";
echo $num2*$num1; // multiplication
echo"<br>";
echo $num2/$num1; // division
echo"<br>";
echo $num2%$num1; // modulus
echo"<br>";
echo"<br>";
// assignment operator
$num3=300;
echo $num3;
$num3=50;
echo $num3;

echo"<br>";
//comparison operator
$num7=568;
$num9="568";
$num4="300";
var_dump($num7==$num9); // equals operator
echo"<br>";
var_dump($num4>$num7);
echo"<br>";
var_dump($num7===$num9); // identical operator
echo"<br>";
var_dump($num7!=$num9);
echo"<br>";
$num4=300;
$num6=200;
var_dump($num4>$num6);
echo"<br>";
var_dump($num4<$num6);
echo"<br>";
$num10 = 50;
$num11 = 50;
echo"<br>";
var_dump($num10 >= $num11); // returns true because $num10 is greater than or equal to $num11
echo"<br>";
$num12 = 100;
$num13 = 50;

var_dump($num12 <= $num13); // returns true because $num12 is less than or equal to $num13
echo"<br>";
$num14 = 15;
$num15 = 10;

echo ($num14 <=> $num15); // returns -1 because $nu14 is less than $15
echo "<br>";

$num14 = 100;
$num15 = 100;

echo ($num14 <=> $num15); // returns 0 because values are equal
echo "<br>";

$num14 = 150;
$num15 = 200;

echo ($num14 <=> $num15); // returns +1 because $num14 is greater than $num15
echo"<br>";

//increment and decrement operators
$num1 = 10;
echo ++$num1; // pre-increment
echo"<br>";
$num1 = 100;
echo $num1++; // post increment
echo"<br>";
$num1 = 100;
echo --$num1; // pre decrement
echo"<br>";
$num1 = 100;
echo $num1--; // post decrement


