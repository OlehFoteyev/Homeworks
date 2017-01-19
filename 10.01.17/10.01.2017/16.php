<?php

function test($a ,$b,$c){
    if($a == $b && $a == $c && $b == $c  ){
        return " {$a} {$b} {$c}";
    }
    if($a == $b ){
        return " {$a} {$b}";
    }if($a == $c ){
        return " {$a} {$c}";
    }if($b == $c ){
        return " {$b} {$c}";
    }

}
echo test(4,4,3);