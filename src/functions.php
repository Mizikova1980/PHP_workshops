<?php

/*Задание #1*/

function task1(array $array, $arg2 = false) 
{
    if($arg2) {
        $str = implode(" ", $array);
        return $str;
    } else {
        foreach($array as $value) {
            print "<p>$value</p>";
        }
    }
}

/*Задание #2 */

function task2(string $action, ...$args) 
{
    foreach($args as $n => $arg) {
        if(!is_int($arg) && !is_float($arg)) {
            trigger_error('argument # ' . $n . 'is not integer or float.');
            return 'ERROR: wrong argument.';
        }
    }
    
    switch ($action) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '*':
            $result = 1;
            foreach($args as $arg) {
                $result *= $arg;
            }
            return $result;
        case '/':
            $result = array_shift($args);
            foreach($args as $n => $arg) {
                if($arg == 0) {
                    trigger_error('Деление на ноль - аргумент # ' . ($n + 1));
                    return 'ERROR: Деление на ноль';
                }
                $result = $result / $arg;
            }
            return $result;
        default:
            return 'ERROR: Неизвестное действие';
    }
}

/*Задание #3 */

function task3($a, $b) 
{
    if(!is_int($a)) {
        trigger_error('Первый аргумент не целое число');
        return false;
    }
    if(!is_int($b)) {
        trigger_error('Второй аргумент не целое число');
        return false;
    }
    if($a < 0 || $b < 0) {
        trigger_error('Аргументы должны быть положительными числами');
        return false;
    }
    
    $result = '<table>';
    for($i = 1; $i <= $a; $i++) {
        $result .= '<tr>';
        for($j = 1; $j <= $b; $j++) { 
            $result .= '<td>';
            $result .= $j * $i;
            $result .= '</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    return $result;
}


/*Задание #4 */

function task4()
{
  date_default_timezone_set('Europe/Moscow');
  return date('d.m.Y H:i');

}
function task5($date)
{
  return strtotime($date);

}

/*Задание #5 */
function task6($arg1, $arg2, $str)
{
    $newStr = str_replace($arg1, $arg2, $str);
    return $newStr;
}

/*Задание #6 */

function task7($file, $text)
{
    file_put_contents($file, $text);
    $data = file_get_contents($file);
    return $data;
}

function task8($file)
{
    $data = file_get_contents($file);
    return $data;
}

?>