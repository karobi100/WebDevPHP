<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
function subject(){     // creating a function
    $num=1000;
    $num4=960;
    echo$num+$num4;
}
subject();               // calling a function
echo"<br>";
echo"<br>";
echo pi();
//echo chi();  //

echo"<br>";
// creating a function with some arguments
 function science($maths,$class){
     echo"$maths unit.semester in each $class year<br>";
 }
 science("Calculus",1.0);
 science("Descrete", 2.0);
 science("Probability and Statistics",3.0);
 science("Final Project", 4.0);
