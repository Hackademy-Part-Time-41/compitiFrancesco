<?php

//ES1

// $number = 34;
// $name = "Fra";
// $is_student = true;
// $another_numer = 1.33;

// var_dump($number);
// var_dump($name);
// var_dump($is_student);
// var_dump($another_numer);

// const NAME = "Fra";
// const NUMBER = 34;
// const VERO = true;
// const F_LOAT = 1.33;


//ES2


// $name1 = "Marco";
// $verb = "hai";
// $thirst = "sete";
// $question_mark = "?";
// $why = "Perchè";
// $repeat = $verb;
// $drank = 'bevuto';
// $all = 'tutto';

// echo ("$name1 $verb $thirst $question_mark $why $repeat $drank $all ");


//ES3

$words1 = ['una',67,'vita','colle','mi','rosso',['oscura','era',89,['mezzo',['cammin','Nel',['selva','la',['via','una',true,]],]],'ritrovai','per'],'diritta'];





$words2 = ['elemento1' => 25.89, 'elemento2' => 'nostra','elemento3' => ['Virgilio','smarrita','ché']];


$nel = $words1 [6][3][1][1];
$mezzo = $words1 [6][3][0];
$del = 'del';
$cammin = $words1 [6][3][1][0];
$di = "di";
$nostra = $words2['elemento2'];
$vita = $words1[2];
$mi = $words1[4];
$ritrovai = $words1[6][4];
$per = $words1[6][5];
$una = $words1[0];
$selva = $words1 [6][3][1][2][0];
$oscura = $words1[6][0];
$che = $words2['elemento3'][2];
$la = $words1 [6][3][1][2][1];
$diritta = $words1 [7];
$via = $words1 [6][3][1][2][2][0];
$era = $words1[6][1];

$smarrita = $words2['elemento3'][1];

$result = "$nel $mezzo $del $cammin $di $nostra $vita $mi $ritrovai $per $una $selva $oscura $che $la $diritta $via $era $smarrita";

echo $result;
