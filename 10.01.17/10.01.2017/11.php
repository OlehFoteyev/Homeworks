<?php
function test($a,$b){
    $first =10 - $a;
    $second = 10 - $b;
    if($first < 0){
        $first*= -1;
    }
    if($second < 0){
        $second*= -1;
    }
    if($first < $second){
        return "{$a} к 10";
    }if($first == $second){
        return "{$a} - {$b}";
    }
    else{
        return "{$b} к 10";
    }
}
echo test(7,15);