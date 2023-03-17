<?php

echo 'Задание 1<br>';
$name = 'Юлия';
$age = 42;
echo "Меня зовут $name <br>";
echo "Мне $age года <br>";
echo '"!|/\'"\\ <br>';
echo '<br>';

echo 'Задание 2<br>';

const PICTURES = 80;
const PIC_CRAYON = 23;
const PIC_PENCIL = 40;
const PIC_PAINTS = PICTURES - PIC_CRAYON - PIC_PENCIL;

echo "Задача: <br> 
На школьной выставке " . PICTURES ." рисунков. " . PIC_CRAYON . " из них выполнены фломастерами, " . PIC_PENCIL . " карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке? <br> 
Ответ: Красками выполнено " . PIC_PAINTS . " рисунков. <br>" ;
echo '<br>';


echo 'Задание 3<br>';

$age = mt_rand(-2, 70);

if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать <br>";
} elseif ($age >= 65) {
 echo "Вам пора на пенсию <br>";
} elseif ($age < 18 && $age >= 1) {
    echo "Вам ещё рано работать <br>";
} else {
    echo "Неизвестный возраст <br>";
}
echo '<br>';


echo 'Задание 4<br>';

$day = mt_rand(-2, 10); 
switch($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день <br>";
        break;
    case 6:
    case 7:
        echo "Это выходной день <br>";
        break;
    default:
       echo "Неизвестный день <br>";
}
echo '<br>';

echo 'Задание 5<br>';

$bmw = [
    'model' => '',
    'speed' => '',
    'doors' => '',
    'year' => '',
];
$toyota = $bmw;
$opel = $bmw;

$bmw['model'] = 'X5';
$bmw['speed'] = 120;
$bmw['doors'] = 5;
$bmw['year'] = 2015;

$toyota['model'] = 'Camry';
$toyota['speed'] = 150;
$toyota['doors'] = 4;
$toyota['year'] = 2013;

$opel['model'] = 'Antara';
$opel['speed'] = 140;
$opel['doors'] = 5;
$opel['year'] = 2017;

$cars = [
    'bmw' => $bmw, 
    'toyota' => $toyota, 
    'opel' => $opel
];

foreach ($cars as $key => $car) {
    echo 'CAR ' . $key . '<br>';
    foreach ($car as $elem) {
        echo "$elem\n";
    }
    echo '<br>';
}
echo '<br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <?php
    echo 'Задание 6<br>';

    for($i = 1; $i < 11; $i++) {
        echo'<tr>';
        for($j = 1; $j < 11; $j++) { 
            $s = $j * $i;
            echo '<td>';
            if (($s) % 2 == 0) {
                echo "($s)";
            } else if(!($s) % 2 == 0) {
                echo "[$s]";
            } else {
                echo $s;
            }
        }
    }
    ?>
    </table>
</body>
</html>
