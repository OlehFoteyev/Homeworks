<?php
$result = 0;
$arr = array(26,17,136,12,79,15);
foreach($arr as $name)
{
    echo '<pre>';
    $name *= $name;
    $result +=$name;
}
var_dump($arr);
echo $result;
echo '</pre>';