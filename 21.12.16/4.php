<?php
function test($arr) {
    $all = 0;
    foreach($arr as $key) {
        $all++;
    }
    return $all;
}
$arr = [
    "One" => "Red",
    "Two" => "Blue",
    "Three" => "Yellow",
];

echo test($arr);