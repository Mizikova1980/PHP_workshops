<?php


/*Задание #3.1**/

function task1()
{

    $names = ['Юля', 'Петя', 'Вася', 'Маша', 'Саша'];
    $randomNames = function($names) 
    {
        return $names[array_rand($names)];
    };

    $users = [];
    for($i=0; $i < 50; $i++) {
        $users[] = [
            'id' => $i,
            'name' => $randomNames($names),
            'age' => random_int(18, 45)
        ];
        
    }

    $json = json_encode($users);
    file_put_contents('users.json', $json);
}


function task2() 
{
    $users = json_decode(file_get_contents('users.json'), true);

    $names = array_column($users, 'name');
    $names_count = array_count_values($names);

    $userAge = array_column($users, 'age');
    $sumAges = array_sum($userAge);
    $arrLength = count($users);
    $averageAge = $sumAges / $arrLength;

    echo '<pre>';
    var_dump($names_count);
    echo "Средний возраст: $averageAge лет";
}

?>
