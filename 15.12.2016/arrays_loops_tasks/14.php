<?php

$arr = array (4,2,5,19,13,0,10);
foreach($arr as $k => $e)
    if($e == 2 || $e == 3 || $e == 4) {
        echo "Есть!<br>";
        break;
    }else echo "Нет!<br>";
