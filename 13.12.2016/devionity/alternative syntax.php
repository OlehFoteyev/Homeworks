<?php
$arr = array(
    1 => 5,
    2 => 15,
    3 => 23,
    4 => 32,
    5 => 24,
    6 => 47,
    7 => 72,
    8 => 91,
    9 => 221,
    10 => 1097,
);
foreach ($arr as $key => $val):
    if(($val % 3) == 0){
        echo $val.'<br>';
    }
endforeach;