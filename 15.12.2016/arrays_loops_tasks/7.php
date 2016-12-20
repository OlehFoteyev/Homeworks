<?php
echo '<pre>';
$arr = array(2,5,9,15,0,4);
foreach($arr as $name){
    if($name>3 && $name <10)
    {
        echo $name."<br>";
    }
}

echo '</pre>';