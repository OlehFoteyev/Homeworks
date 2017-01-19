<?php

function test($a){
    if( $a %4 == 0 && $a %400 == 0 && $a %100 == 0){
        $x = 366;
        return "количество дней в году: {$x}";
    }else
    {
        $x =365;
        return "количество дней в году: {$x}";
    }
}
echo test(2000);