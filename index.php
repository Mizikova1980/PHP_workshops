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

require 'src/ws4.php';

$tariff = new Basic();
echo $tariff->calculate(5, 60, ['addDriver','gps']);

$tariff = new Basic();
echo $tariff->calculate(5, 60, ['gps']);

$tariff = new Student();
echo $tariff->calculate(5, 60, ['addDriver','gps']);

$tariff = new Student();
echo $tariff->calculate(20, 120, ['addDriver']);

$tariff = new Hourly();
echo $tariff->calculate(5, 70, ['addDriver']);


?>
</body>
</html>