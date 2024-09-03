<?php

$s = "leetcode";
$k = 2;
// converter cada letra do alfabeto em um numero na string que foi fornecida
$modifyString = (int) str_replace([
    'a',
    'b',
    'c',
    'd',
    'e',
    'f',
    'g',
    'h',
    'i',
    'j',
    'k',
    'l',
    'm',
    'n',
    'o',
    'p',
    'q',
    'r',
    's',
    't',
    'u',
    'v',
    'w',
    'x',
    'y',
    'z',
], [
    '1',
    '2',
    '3',
    '4',
    '5',
    '6',
    '7',
    '8',
    '9',
    '10',
    '11',
    '12',
    '13',
    '14',
    '15',
    '16',
    '17',
    '18',
    '19',
    '20',
    '21',
    '22',
    '23',
    '24',
    '25',
    '26',
], $s);

$result = 0;
$splitedNumbers = str_split(strval($modifyString));
$i = 0;
while($i < $k) {
    foreach ($splitedNumbers as $number) {
        $number = (int) $number;
        $result += $number;
    }
    $i++;
    if ($i == $k) {
        return $result;
    } else {
        $splitedNumbers = str_split(strval($result));
        $result = 0;
    }
}
