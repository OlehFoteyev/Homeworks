<?php
function test($a, $b, $c){
    if($a != $b && $a != $c){
        return 1;
    }
    if($b != $a && $b != $c){
        return 2;
    }
    if($c != $b && $c != $a){
        return 3;
    }

}
echo test(2,2,3);