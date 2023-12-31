<?php
//Определить, является ли заданное шестизначное число счастливым.
//Счастливым называют такое шестизначное число, что сумма его первых трех цифр равна сумме его последних трех цифр.
$a = rand(100000, 999999);
$g = 0;
$j = 0;

for ($i = $a; $i > 0; $i /= 10) {
    if ($i >= 999) {
        $k = $i % 10;
        $g += $k;
    } else {
        $c = $i % 10;
        $j += $c;
    }
}

echo $a . '<br>';

if ($g == $j) {
    echo "Счастливое число!";
} else {
    echo "не счастливое число...";
}

echo '<br><br>';

//Даны натуральные числа х и у.
//Вычислить произведение x на y , используя лишь операцию сложения.
$x = rand(1, 20);
$y = rand(1, 20);

$m = $x;

for ($i = 1; $i < $y; $i++) {
    $m += $x;
}

echo 'x = ' . $x . '; y = ' . $y . ';<br>';
echo 'произведение x, y: ' . $m;

echo '<br><br>';

//Дано случайное четное число n (1000, 9998). Делите его на 2 столько раз, пока результат деления не станет меньше 50.
//Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла), и запишите его в переменную num.
$n = rand(1000, 9998);
if ($n % 2 != 0) $n--;

$k = 0;
$num = 0;

for ($i = $n; $i >= 50; $i /= 2) {
    $k = $i;
    $num++;
}

echo $n . ', ' . $k / 2;
echo '<br>' . 'итераций: ' . $num;

echo '<br><br>';

//Найти все числа кратные 3 в диапазоне от 100 до 2000.
for ($i = 100; $i <= 2000; $i++) {
    if ($i % 3 == 0) {
        echo $i . ', ';
    }
}

echo '<br><br>';

//Найтие все числа кратные и 3 и 5  в диапазоне от 1000 до 2000
for ($i = 1000; $i <= 2000; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i . ', ';
    }
}

echo '<br><br>';

//Найти все числа в диапазоне от 5000 до 1000 кратные 7 или 9, но не кратные обоим этим числам.
for ($i = 5000; $i >= 1000; $i--) {
    if ($i % 7 == 0 && $i % 9 != 0 || $i % 7 != 0 && $i % 9 == 0) {
        echo $i . ', ';
    }
}

echo '<br><br>';

//Выведите на экран все простые числа в диапазоне от 100 до 200. Посчитайте их количество и также выведите на экран.
$n = 0;

for ($i = 100; $i < 200; $i++) {
    $c = 0;

    for ($k = 2; $k <= $i && $c < 2; $k++) {
        if ($i % $k == 0) {
            $c++;
        }
    }

    if ($c < 2) {
        echo $i . ', ';
        $n++;
    }
}

echo '<br>количество простых чисел: ' . $n;

echo '<br><br>';

//Вывести таблицу умножения с использованием вложенных циклов в следующем виде:

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        echo $i . ' x ' . $j . ' = ' . $i * $j . '<br>';
    }

    echo '<br>';
}