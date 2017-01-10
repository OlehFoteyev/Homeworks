<?php
$day = 4;
$arr = [
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
    "Sunday",];

foreach($arr as $key => $value) {
    if ($key == $day - 1){
        echo "<i> {$value}</i><br>";
    }else{
        echo $value."<br>";
    }
}
