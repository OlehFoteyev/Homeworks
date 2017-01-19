<?php

function test($a,$b){
    if($a > 0 && $b > 0){
        return 1;
    }
    elseif($a < 0 && $b > 0){
        return 2;
    }
    elseif($a < 0 && $b < 0){
        return 3;
    }
    elseif($a > 0 && $b < 0){
        return 4;
    }
}
echo test(-2, -1);