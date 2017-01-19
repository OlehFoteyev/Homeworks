<?php

function test($a)
{
    if(($a % 5>0) && ($a % 1<= 3)){
        return "Зеленый!";
    }
    if(($a %5>3) && ($a % 5 <= 4)){
        return "Желтый!";
    }
    else{
        return "Красный!";
    }
}
echo test(7);