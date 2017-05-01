<p>
    4)Дан файл. Каждая строка содержит имя, пароль и email, разделенные
    символами ':' (двоеточие). Удалить строки с повторами email.
    Удалить строки, в которых имена совпадают

</p>
<?php


if(file_exists("1.txt")){           //Проверяем на наличие данного файла
    $file = file("1.txt");          //читаем содержимого файла и помещаем его в массив
}
$count = count($file);
foreach($file as $user){        //пробегаемся по значениям массива
    $file_users[] = explode(':',$user); // Разбиваем с помощью разделителя(в данном случае ":")
}
echo '<pre>';
print_r($file_users);
foreach($file as $key => $user_data){
    $name = $file[$key][0];   //создаем переменную и присваиваем ей значение на каждой итерации
    $email = $file[$key][2];  //создаем переменную и присваиваем ей значение на каждой итерации
    $next_key = $key+1;
    if($next_key < $count)      //проходим до конца массива
    {
        if(($file[$next_key][2]!=$email) && ($file[$next_key][0]!=$name)){  //если не равны mail и name ,тогда записываем в новый массив
            $new_result[] =$user_data;
        }
    }
}
foreach($new_result as $item){
    $res[]= implode(":",(array)$item);        //собираем обратно
}
$fp =fopen("result.txt","w");
foreach($res as $key){
    fwrite($fp,$key.PHP_EOL);
}
print_r($res);
echo '<pre>';