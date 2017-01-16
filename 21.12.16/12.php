<?php
function  test($a,$b,$c,$d) {
    if($a == 1) {
        return $a . $b;
    }
    if($a >= 2 && $a <= 4) {
        return $a . $c;
    }
    if($a > 4) {
        return $a . $d;
    }
}
 echo test(13," яблоко"," Яблока"," яблок");