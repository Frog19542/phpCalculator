<?php

$num1 = 0;
$num2 = 0;
echo "Введите числа: \n";
echo "Первое число: ";
$num1 = (float) fgets(STDIN);
echo "Второе число: ";
$num2 = (float) fgets(STDIN);
echo "Числа сохранены!\n";

echo "1. Сложение\n";
echo "2. Вычитание\n";
echo "3. Деление\n";
echo "4. Степень\n";
echo "Выбери пункт: ";

$choice = trim(fgets(STDIN));

if($choice == 1)
{
    if ($num1 == 0 && $num2 == 0) 
    {
        echo "Сначала введи числа!\n";
    } else {
        $result = $num1 + $num2;
        echo "Результат: $num1 + $num2 = $result\n";
    }
}

if($choice == 2)
{
    if ($num1 == 0 && $num2 == 0) {
        echo "Сначала введи числа!\n";
    } else {
        $result = $num1 - $num2;
        echo "Результат: $num1 - $num2 = $result\n";
    }
}

if($choice == 3)
{
    if ($num1 == 0 && $num2 == 0) {
    echo "Сначала введи числа!\n";
    } elseif ($num2 == 0) {
    echo "Ошибка: на ноль делить нельзя!\n";
    } else {
    $result = $num1 / $num2;
    echo "Результат: $num1 / $num2 = $result\n";
    }
}

if($choice == 4)
{
    if ($num1 == 0 && $num2 == 0) {
    echo "Сначала введи числа!\n";
    } else {
    $result = pow($num1, $num2);
    echo "Результат: $num1 ^ $num2 = $result\n";
    }
}
?>