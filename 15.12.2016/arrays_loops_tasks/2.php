<?php
$result = 0;
$arr = array(1,20,15,17,24,35);
foreach ( $arr as $name) {
    echo '<pre>';
    $result += $name;
}
var_dump($arr);
echo $result.'<br>';
echo '</pre>';