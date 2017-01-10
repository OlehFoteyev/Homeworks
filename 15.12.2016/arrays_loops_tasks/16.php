<?php

$arr = array (1,2,3,4,5,6,7,8,9);

foreach($arr as $k => $v){
    if($v == 4 || $v == 7 )
        echo "<br>";
    echo "{$v} ,";
}