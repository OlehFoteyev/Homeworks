<?php
$arr = ['a','b','c','d','e'];

function sup($arr){
    return $arr = mb_strtoupper($arr);
}
$b = array_map("sup",$arr);
print_r($b);