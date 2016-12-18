<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Homework</title>
</head>
<body>
<?php
$a=6;
$b=10;
$c=15;
$sum=0;


echo  "a ={$a}<br>";
echo  "b ={$b}<br>";
echo  "c ={$c}<br>";
echo  "sum ={$sum}<br>";

echo "1)Sum and product of numbers:<br>";
$sum = $a + $b;
echo "sum = {$sum}<br>";
$sum = $a * $b;
echo "product of numbers = {$sum}<br>";

echo "2)sum of squares:<br>";
$sum = ($a*$a) + ($b*$b);
echo "sum of squares = {$sum}<br>";

echo "3) average:<br>";
$sum = ($a + $b +$c)/3;
echo "average = {$sum}<br>";

echo "4) remainder of the division:<br>";
$sum = $b % 3;
echo "sum = {$sum}<br>";

$sum = $a % 5;
echo "sum = {$sum}<br>";

echo "5)increased by 30% & 120% average:<br>";

$sum = (($a/100)*30)+$a;
echo "sum = {$sum}<br>";

$sum = (($a/100)*120)+$a;
echo "sum = {$sum}<br>";

echo "6)finish:<br>";
$sum =(($a/100)*40)+ (($b/100)*84);
echo "sum = {$sum}<br>";

?>
<br>

</body>
</html>