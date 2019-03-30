<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeWork5_9</title>
</head>
<body>
<h2>Циклы</h2>
<ul style="list-style-type: none;">
    <li>1) Дан массив с числами. Числа могут быть положительными и отрицательными. Найдите сумму положительных и
        отрицательных элементов этого массива. Например массив: $arr = [2, -5, -9, 15, 11, -4, 7, 1, -10];</li>
    <li>2) Дано число, например 30. У этого числа есть делители - числа, на которое оно делится без остатка. Делители
        числа 30 - это 1, 2, 3, 5, 6, 10, 15, 30. Задача: сделайте массив делителей нашего числа и вывести его. Число
        может быть любым, не обязательно, 30.</li>
    <li>3) Нарисуйте пирамиду, как показано ниже, только у этом пирамиды должно быть не 5 рядов, а произвольное
        количество, оно задается переменной так: $number = 5; - это первый ряд пирамиды.
        xxxxx
        xxxx
        xxx
        xx
        x</li>
</ul>
<?php
echo "<b>Задание 1:</b><br>";
//Первое задание
$arr = [2, -5, -9, 15, 11, -4, 7, 1, -10];

//Переменная для накопления суммы сложения положительных элементов заданного массива
$sumPlusElement = 0;

//Переменная для накопления суммы сложения отрицательных элементов заданного массива
$sumMinusElement = 0;

foreach ($arr as $value) {
    if ($value > 0) {
        $sumPlusElement += $value;
    } else {
        $sumMinusElement += $value;
    }
}
printf("Сумма положительных элементов данного масива равняется <b>%s</b>, а сумма отрицательных элементов данного массива равняется <b>%s</b>", $sumPlusElement, $sumMinusElement);

echo "<br><br>";
echo "<b>Задание 2:</b><br>";
//Второе задание
$valueData = 30;

$arDivision = [];

if ($valueData > 0) {
    for ($i = 1; $i <= $valueData; $i++) {
        if ($valueData % $i == 0) {
            $arDivision[] = $i;
        }
    }
} else {
    echo "Число должно быть положительным.";
}
echo "<pre>";
print_r($arDivision);
echo "</pre>";

echo "<br><br>";
echo "<b>Задание 3:</b><br>";
//Третье задание
$number = 5;

for ($i = $number; $i > 0; $i--) {
    $str = "";
    for ($a = $i; $a > 0; $a--) {
       $str .= "x";
    }
    echo $str."<br>";
}

?>
</ul>
</body>
</html>
