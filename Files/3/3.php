<p>
    3)Дан файл со словами. Упорядочить слова по алфавиту.


</p>
<?php
file_put_contents("a.txt"," potatoes \n apple \n lemon\n orange\n banana\n"); //Пишем строку в файл

$a = file("a.txt");             //помещаем содержимое файла в строку
sort($a);                       //Сортируем массив по алфавиту
echo "<pre>";
print_r($a);                    //Выводим результат
echo "</pre>";
file_put_contents("a.txt",$a);        //Заполняем файл результатом