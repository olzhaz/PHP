<?php
//Реализуйте функцию (translit), которая переводит все символы русского алфавита входящей строки в символы английского алфавита и возвращает её.

$arr = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'ye',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'y',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'kh',
    'ц' => 'ts',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shch',
    'ы' => 'y',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya',
];

$str = 'казакстан';

function translate($alphabet, $str) {
    $res = '';

    for ($i = 0; $i < mb_strlen($str); $i++) {
        $search = mb_substr($str, $i, 1);
        $res .= $alphabet[$search];
    }

    return $res;
}

echo $str . ' => ' . translate($arr, $str);