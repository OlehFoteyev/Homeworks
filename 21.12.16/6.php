<?php
function month($a){
    switch($a){
        case 1: return "Январь!<br>";break;
        case 2: return "Февраль!<br>";break;
        case 3: return "Март!<br>";break;
        case 4: return "Апрель!<br>";break;
        case 5: return "Май!<br>";break;
        case 6: return "Июнь!<br>";break;
        case 7: return "Июль!<br>";break;
        case 8: return "Август!<br>";break;
        case 9: return "Сентябрь!<br>";break;
        case 10: return "Октябрь!<br>";break;
        case 11: return "Ноябрь!<br>";break;
        case 12: return "Декабрь!<br>";break;
        default:return "Число некорректное";
    }
}
echo month(5);