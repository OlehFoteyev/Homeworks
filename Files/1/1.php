<p>
    1)Даны два файлы со словами, разделенными пробелами. Создать новый файл,
    содержащий:
    а) строки, которые встречаются только в первом файле;'<br>
    б) строки, которые встречаются в обоих файлах;<br>
    в) строки, которые встречаются в каждом файле более двух раз.

</p>
<?php


$file_1= file_get_contents("1.txt");   //Читаем содержимое файла 1  и помещаем его в массив
$file_2 = file_get_contents("2.txt");   //Читаем содержимое файла 2  и помещаем его в массив
$result =" ";   //Будем записывать сюда результ задачи
$array_1 = explode(" ",$file_1);  //разбиваем строку с помощью разделителя(т.е. убираем пробелы)
$array_2 = explode(" ",$file_2);  //разбиваем строку с помощью разделителя(т.е. убираем пробелы)


foreach ($array_1 as $key ){
    if(!in_array($key,$array_2)){    //проверяет присутствует ли в массиве значение
        $result .=$key.PHP_EOL;
    }
}
$result .= PHP_EOL . '-----' . PHP_EOL;

foreach($array_1 as $val_1){
    foreach($array_2 as $val_2)
        if($val_1 == $val_2)               //проверяем на наличие одинаковых слов в двух файлах
            $words_in_both[$val_1] = $val_1;
}

$res = implode(' - ',$words_in_both);     //объединяет элементы массива в строку

$result .= PHP_EOL . $res . PHP_EOL;  //результат 2 подзадачи
$result .= PHP_EOL . '-----' . PHP_EOL;

echo '---';
var_dump($result);

$ar_count_1 = array_count_values($array_1); //подсчитываем количество всех значений в первом массиве
$ar_count_2 = array_count_values($array_2);////подсчитываем количество всех значений во втором массиве
$array_result_1 = [];
$array_result_2 = [];
foreach($ar_count_1 as $key => $value ){   //пробегаемся по массиву и если встречаються повторяющиеся ключи больше двух раз записываем их в новый массив
    if($value >= 2) {
        $array_result_1 [] = $key;
    }
}
foreach($ar_count_2 as $key => $value ){   // //пробегаемься по массиву и если встречаються повторяющиеся ключи больше двух раз записываем их в новый массив
    if($value >= 2) {
        $array_result_2 [] = $key;
    }
}
var_dump($array_result_2);

$diff = array_intersect($array_result_1,$array_result_2); //вычесляем расхождение массива
var_dump($diff);

$result .= implode(" - ", $diff);    //объединяет элементы массива в стороку
var_dump($result);
file_put_contents("result.txt",$result);
