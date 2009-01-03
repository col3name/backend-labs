<?php

/**
 * №7 (#40)
 * Разработайте PHP-скрипт bubble_sort.php, реализующий алгоритм «Пузырьковой сортировки». Входные данные задаются в виде GET-параметра numbers. Как следует из его названия, он должен содержать числа, разделенные запятыми (для получения массива из строки, используем функцию explode). В случае, если параметр не был передан, или он содержит хотя бы одно не числовое значение, возвращается код ответа 400.
 * Формат вывода ответа – строка чисел, разделенных запятыми (используйте функцию implode для получения строки из массива).
 *
 * Пример:
 *    /bubble_sort.php?numbers=10,1,23,18,56,6,3,4,2,1,1
 *    Oтвет: 1,1,1,2,3,4,6,10,18,23,56
 */

function bubbleSort(&$arr)
{
    $size = count($arr);
    for ($i = 0; $i < ($size - 1); ++$i) {
        for ($j = 0; $j < ($size - $i - 1); ++$j) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

function handle($numbersStr)
{
    $commaSymbol = ',';
    $arr = explode($commaSymbol, $numbersStr);
    bubbleSort($arr);
    $result = implode($commaSymbol, $arr);
    echo $result;
}

function main()
{
    if (count($_GET) != 1 || !isset($_GET['numbers']) || empty($_GET['numbers'])) {
        header("Status: 400");
        return 1;
    }
    $numbersStr = $_GET['numbers'];
    handle($numbersStr);
    return 0;
}

main();
