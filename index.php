<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require 'src/functions.php';


echo 'Задание 1<br>';
echo task1(['Привет', ',', 'Вася', '!', 'Как дела?'], true);
echo task1(['Привет', ',', 'Вася', '!', 'Как дела?']);

echo 'Задание 2<br>';
echo task2('/', 1, 2, 3, 5.2);
echo '<br>';
echo '<br>';

echo 'Задание 3<br>';
echo task3(5, 3);
echo '<br>';

echo 'Задание 4<br>';
echo Task4();
echo '<br>';
echo task5('24.02.2016 00:00:00');
echo '<br>';
echo '<br>';

echo 'Задание 5<br>';
echo task6('К', ' ', 'Карл у Клары украл Кораллы');
echo '<br>';
echo task6('Две', 'Три', 'Две бутылки лимонада');
echo '<br>';
echo '<br>';

echo 'Задание 6<br>';
echo task7('text.txt', 'Hello again!');
echo '<br>';
echo task8('text.txt');


?>
</body>
</html>