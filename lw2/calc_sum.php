<?php
/**
 * Created by PhpStorm.
 * User: mikus_000
 * Date: 14.02.2018
 * Time: 16:43
 */
//6.  Напишите PHP приложение calc_sum.php, которое вычисляет сумму чисел, переданных в запросе GET.
//#10 Параметры запроса arg1 и arg2.
//Например,
//    /calc_sum.php?arg1=10&arg2=15
//    Выведет на экран число 25.

header("Content-Type: text/plain");
if (is_numeric($_GET['arg1']) && is_numeric($_GET['arg2'])) {
    echo $_GET['arg1'] + $_GET['arg2'];
}
