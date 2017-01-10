<?php
$a =123;


$arr = str_split($a);
$sum = 0;
echo "<br>";
foreach($arr as $key => $value) {
    $sum +=$value;
}
echo $sum;
print_r($arr);