<?php
/**
 * Created by PhpStorm.
 * User: mikus_000
 * Date: 14.02.2018
 * Time: 17:00
 */
//7. Внесите следующие доработки в задание 6.:
//#5 возможность задания математической операции с помощью GET-параметра запроса. Возможные значения: add, sub, mul, div.
//
//Пример:
///calc.php?arg1=10&arg2=15&operation=add
//
//#5 операция вычитание (sub);
//#5 операция умножение (mul);
//#5 операция деление (div);
header("Content-Type: text/plain");
if (is_numeric($_GET['arg1']) && is_numeric($_GET['arg2'])) {
    if ($_GET['operation'] === 'add') {
        echo $_GET['arg1'] + $_GET['arg2'];
    } elseif ($_GET['operation'] === 'sub') {
        echo $_GET['arg1'] - $_GET['arg2'];
    } elseif ($_GET['operation'] === 'mul') {
        echo $_GET['arg1'] * $_GET['arg2'];
    } elseif ($_GET['operation'] === 'div') {
        if ($_GET['arg2'] !== "0") {
            echo $_GET['arg1'] / $_GET['arg2'];
        } else {
            echo "division by zero";
        }
    }
}
