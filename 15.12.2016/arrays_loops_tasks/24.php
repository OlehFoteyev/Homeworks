<?php
$a =442158755745;
$b =5;
$sum = 0;
$arr = str_split($a);
foreach($arr as $key => $value){
    if($b == $value)
        $sum ++;
}
echo "{$b} встречаеться {$sum} раза";
print_r($arr);