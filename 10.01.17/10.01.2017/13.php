<?php
function test($a,$b,$c){
    if(($a < $b + $c ) && ($b <$a + $c) && ($c < $a +$b)){
        return   "Треугольник существует!!!!";
    } else return "Треугольник не существует!!!!";
}
echo test(1,2,3);