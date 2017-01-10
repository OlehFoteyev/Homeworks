<?php
$arr = array(2,5,9,19,0,4);
foreach($arr as $k => $v){
    if($v > 3 && $v < 10)
        echo $k .'<br>';
}