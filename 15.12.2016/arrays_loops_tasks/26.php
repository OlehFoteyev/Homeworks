<?php
$arr = [];
for($i = 0; $i < 10 ;$i++){
    $arr[] = rand(0,100);
}
foreach($arr as $k => $v){
    if(($k%2)==0){
        $sum = 1;
        $sum*=$v;
    }
    echo $sum;
}
echo "<pre>";
print_r($arr);
echo "</pre>";