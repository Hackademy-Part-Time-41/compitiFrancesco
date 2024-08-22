<?php

//ES1

$users = [
    ['name' => 'Luca', 'surname' => 'Rossi', 'gender' => 'M'],
    ['name' => 'Andrea', 'surname' => 'Dallavalle', 'gender' => 'F'],
    ['name' => 'Elisa', 'surname' => 'Cerioli', 'gender' => 'F'],
    ['name' => 'Francesco', 'surname' => 'Monti', 'gender' => 'M'],
    ['name' => 'Lisa', 'surname' => 'Simpson', 'gender' => 'F'],
    ['name' => 'Ilaria', 'surname' => 'Bianchi', 'gender' => 'F'],
    ['name' => 'Alessandro', 'surname' => 'Borghese', 'gender' => 'M']
];

foreach ($users as $user){

    $name = $user['name'];
    $surname = $user['surname'];

    if($user['gender'] === 'M'){
        echo "goodmorning Mr. $name $surname \n";
    }elseif($user['gender'] === 'F'){
        echo "Goodmorning Miss. $name $surname \n";
    }
}

//ES2


$numbers = [30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40];
$even = 0;
$counter = 0;

foreach($numbers as $number){

    if($number % 2 == 0){
        $even = $even + $number;
        $counter++;
    }

}

$result = $even / $counter;
echo "The average of even numbers is: $result";

//ES3

for($i=1; $i <= 100; $i++){

    switch ($i) {
        case $i % 5 == 0 && $i % 3 == 0:
            echo "HACKADEMY\n";
            break;
        case $i % 5 == 0:
            echo "JAVASCRIPT\n";
            break;
        case $i % 3 == 0:
            echo "PHP\n";
            break;
        default:
            echo "$i\n";
            break;
    }
    
}

// END