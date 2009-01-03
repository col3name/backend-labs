<?php

/**
  * №6(#20)
 *    Разработайте PHP-скрипт counter.php, выполняющий подсчет вхождений каждого символа во входной строке, передаваемой с помощью GET-параметра string. Программа должна корректно обрабатывать ситуации, когда параметр string отсутствует, или задан неверно. В этом случае сервер возвращает код ответа 400. Регистр символов учитывается: то есть символы H и h являются разными.
  *   Формат вывода данных: символ – количество повторений, каждая пара выводится на новой строке.
  *   Пример:
  *   /counter.php?string=Hello World
  *   Ответ:
  *   H – 1
  *   e – 1
  *   l  - 3
  *   o – 2
  *   W – 1
  *   r – 1
  *   d – 1
  *   ‘ ‘ (пробел) – 1.
  *
  *   6.1 (#5) Не учитывать регистр. То есть символы H и h – одно и то же.
*/

function printOccurrenceSymbol($str)
{
    $str = str_replace(" ", " ", $str);
    $str = strtoupper($str);
    $spaceNumberInAscii = 32;
    foreach (count_chars($str, 1) as $i => $val) {
        echo '<p>';
        if ($i === $spaceNumberInAscii)
        {
            echo "‘ ‘ (пробел)";
        }
        else
        {
            echo chr($i);
        }
        echo '-'. $val .'</p>';
    }
}

function main()
{
    if (count($_GET) != 1 || !isset($_GET['string']) || empty($_GET['string'])) {
        header("Status: 400");
        return 1;
    }
    $inputStr = $_GET['string'];
    printOccurrenceSymbol($inputStr);
    return 0;
}

main();