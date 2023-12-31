<?php
//Дано 10-значное случайное число, необходимо преобразовать данное число в строку по следующему сценарию:
//сначала подбирается соответствующий символ из английского алфавита под двузначный номер, если такое возможно, иначе под однозначный номер.
//В качестве примера рассмотрим шестизначное число: 132722 = 13(n) - 2(c) - 7(h) - 22(w) = nchw

$num = rand(100000, 999999);
$search = 'abcdefghijklmnopqrstuvwxyz';
$res = '';

for ($i = 0; $i < mb_strlen($num); $i += 2) {
    $index = mb_substr($num, $i, 2);
    $test = mb_substr($num, $i, 1);

    if ($index > 25 || $test == 0) {
        $index = mb_substr($num, $i, 1);
        $i--;
    }

    $res .= mb_substr($search, $index, 1);
}

echo $num . ' => ' . $res;