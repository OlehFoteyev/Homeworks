<?php
function number($a)
{
    return $a;
}

function month($b)
{
    switch ($b) {
        case 1:
            return "Января ";
            break;
        case 2:
            return "Февраля ";
            break;
        case 3:
            return "Марта ";
            break;
        case 4:
            return "Апреля ";
            break;
        case 5:
            return "Мая ";
            break;
        case 6:
            return "Июня ";
            break;
        case 7:
            return "Июля ";
            break;
        case 8:
            return "Августа ";
            break;
        case 9:
            return "Сентября ";
            break;
        case 10:
            return "Октября ";
            break;
        case 11:
            return "Ноября ";
            break;
        case 12:
            return "Декабря ";
            break;
        default:
            return "Число некорректное";
    }
}

function day($c)
{
    switch ($c) {
        case 1:
            return "Понедельник";
            break;
        case 2:
            return "Вторник";
            break;
        case 3:
            echo "Среда";
            return;
        case 4:
            return "Четверг";
            break;
        case 5:
            return "Пятница";
            break;
        case 6:
            return "Суббота";
            break;
        case 7:
            return "Воскресенье";
            break;
        default:
            return "Число некорректное";
    }
}

function test($a,$b,$c){
    return number($a).month($b).day($c);
}
echo test(31,1,5);