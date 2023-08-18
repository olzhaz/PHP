<?php
//Даны два случайных трехзначных числа $a и $b. Реализуйте процесс умножения столбиком числа $a на число $b;
/*
$a = rand(100, 999);
$b = rand(100, 999);

$r = 1;
$sum = 0;

for ($i = $b; $i >= 1; $i /= 10) {
    $q = $i % 10;
    $sum += $a * $q * $r;

    $r *= 10;
}

echo 'a = ' . $a.'<br>';
echo 'b = ' . $b.'<br>';
echo 'умноженное число: ' . $sum;
*/


//Дан массив $arr из 10 случайных чисел от 1 до 10. Найдите произведение элементов массива
/*
$arr = [];
$m = 1;

echo 'arr:' . "\n";

for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 10);
    $m *= $arr[$i];

    echo ' - [' . $i . '] = ' .  $arr[$i] . "\n";
}

echo 'произведение: ' . $m;
*/


//Дан массив $arr из 10 случайных чисел от -100 до 100. Соберите в массив $arr1 все отрицательные значения.
/*
$arr = [];
$arr1 = [];

echo 'arr:' . "\n";

for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(-100, 100);

    if ($arr[$i] < 0) {
        $arr1[] = $arr[$i];
    }

    echo ' - [' . $i . '] = ' .  $arr[$i] . "\n";
}

echo "\n" . 'arr1:' . "\n";

for ($j = 0; $j < sizeof($arr1); $j++) {
    echo ' - [' . $j . '] = ' .  $arr1[$j] . "\n";
}
*/


//Дан массив $arr из 10 случайных чисел от 1 до 100. Соберите в массив $evens четные числа, а в массив $odds нечетные.
/*
$arr = [];
$arrE = [];
$arrO  = [];

echo 'arr:' . "\n";

for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 100);

    if ($arr[$i] % 2 == 0) {
        $arrE[] = $arr[$i];
    } else {
        $arrO[] = $arr[$i];
    }

    echo ' - [' . $i . '] = ' .  $arr[$i] . "\n";
}

echo "\n" . 'arrEven:' . "\n";
for ($j = 0; $j < sizeof($arrE); $j++) {
    echo ' - [' . $j . '] = ' .  $arrE[$j] . "\n";
}

echo "\n" . 'arrOdd:' . "\n";
for ($k = 0; $k < sizeof($arrO); $k++) {
    echo ' - [' . $k . '] = ' .  $arrO[$k] . "\n";
}
*/


//Даны массив $arr1 из 100 случайных чисел от 1 до 100 и два случайных числа $a и $b в диапазоне 10 до 100.
//Собрать в массив $arr2 числа из массива $arr1, индексы которых лежат в диапазоне от меньшего ($a или $b) числа до большего  ($a или $b).
/*
$arr1 = [];
$arr2 = [];

$a = rand(10, 100);
$b = rand(10, 100);

for ($i = 0; $i < 100; $i++) {
    $arr1[] = rand(1, 100);

    if ($a > $arr1[$i] && $arr1[$i] > $b || $a < $arr1[$i] && $arr1[$i] < $b) {
        $arr2[] = $arr1[$i];
    }
}

echo 'a = ' . $a . "\n";
echo 'a = ' . $b . "\n";
echo "\n" . 'arr2:' . "\n";

for ($j = 0; $j < sizeof($arr2); $j++) {
    echo ' - [' . $j . '] = ' .  $arr2[$j] . "\n";
}
*/


//Дан массив $arr из 10 случайных чисел от -100 до 100. Замените все положительные числа на 1, а все отрицательные на 0;
/*
$arr = [];
echo 'arr:' . "\n";

for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(-100, 100);
    echo ' - [' . $i . '] = ' .  $arr[$i] . ' -> ';

    if ($arr[$i] >= 0) {
        $arr[$i] = 1;
    } else {
        $arr[$i] = 0;
    }

    echo $arr[$i] . "\n";
}
*/


//Дан массив $arr из 10 случайных чисел от 0 до 100. Поменяйте местами максимальный и минимальный элементы.

/*
$arr = [];
$max = 0;
$min = 0;

echo 'исходный' . "\n" . 'arr:' . "\n";
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(0, 100);
    echo ' - [' . $i . '] = ' .  $arr[$i] . "\n";

    if ($arr[$i] > $arr[$max]) {
        $max = $i;
    } else if ($arr[$i] < $arr[$min]) {
        $min = $i;
    }
}

$temp = $arr[$max];
$arr[$max] = $arr[$min];
$arr[$min] = $temp;

echo "\n";
echo 'max $i = ' . $max . "\n";
echo 'min $i = ' . $min . "\n";

echo 'arr:' . "\n";
for ($j = 0; $j < 10; $j++) {
    echo ' - [' . $j . '] = ' .  $arr[$j] . "\n";
}
*/

//Дан массив $arr из 20 случайных чисел (0 или 1). Найдите длину самой длинной цепочки повторяющихся чисел в данном массиве.
//К примеру в массиве [0, 0, 1, 1, 0, 0, 0, 0, 1, 1, 0], длина самой длинной цепочки будет 4 .

$arr = [];

$tz = 0;
$zero = 0;

$to = 0;
$one = 0;

echo '[';
for ($i = 0; $i < 20; $i++) {
    $arr[] = rand(0, 1);

    echo $arr[$i];
    if ($i < 19) {
        echo ', ';
    }

    if ($arr[$i] == 0) {
        if ($one > $to) {
            $to = $one;
        }
        $one = 0;

        $zero++;
    } else {
        if ($zero > $tz) {
            $tz = $zero;
        }
        $zero = 0;

        $one++;
    }
}

if ($zero > $tz) {
    $tz = $zero;
}

if ($one > $to) {
    $to = $one;
}

echo ']' . "\n";
echo "\none = " . $to;
echo "\nzero = " . $tz;