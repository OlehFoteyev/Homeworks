<p>
    5)Написать функцию,которая будет показывать список всех файлов в данной папке
    (поиск файлов происходит и во всех вложенных уровнях).
</p>
<?php
function test($dir) {
    $openDir = scandir($dir); //получаем список файлов и каталогов,расположенных по указанному пути
    $arrFiles = [];
    foreach ($openDir as $value) {
        if ($value == '.' || $value == '..') {  //если находимся на уровне или на два уровня выше
            continue;                           //пропускаем
        }
        if (is_dir("$dir/$value")) {            //определяем являеться ли имя файлом директории
            $arrFiles = array_merge(test("$dir/$value"), $arrFiles);        //сливаем массивы
        } else {
            $arrFiles[] = $value;       // и добавляем значение
        }
    }
    return $arrFiles;
}



echo '<pre>';
print_r(test('.'));
echo '</pre>';