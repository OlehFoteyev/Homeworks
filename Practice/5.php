<p>
    5) Написать функцию, определяющую является ли переданная в неее строка  палиндромом
</p>
<?php
function test($b) {
    $a = str_split($b);
    $arrClean = ' ';
    foreach ($a as $v) {
        if ($v != " " && $v != "," && $v != "!" && $v != "-" && $v != ".") {
            $arrClean = $arrClean . $v ;
        }
    }
    $arrReverse = strrev($arrClean);
    if(strcasecmp($arrClean, $arrReverse) == 0) {
        return 'Palindrome';
    }
    return 'Not Palindrome' ;
}