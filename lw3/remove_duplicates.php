<?php

/**
 * №3 (#10)
 * Разработайте PHP-скрипт remove_duplicates.php, который удалит все повторяющиеся
 * символы из переданной строки. Входные данные задаются как аргумент командной строки. В случае,
 * если аргумент не задан, или заданы лишние, программа должна вывести информационное сообщение.
 *
 * Пример:
 *    php remove_duplicates.php Hello World
 *    Incorrect number of arguments!
 *    Usage php remove_duplicates.php <input string>
 *
 *    php remove_duplicates.php “Hello World !!”
 *    Helo Wrd!
 *
 */

function removeDuplicates(&$str)
{
    return implode(array_unique(str_split($str)));
}

function main($argc, $argv)
{
    if ($argc !== 2) {
        echo "Incorrect number of arguments!\nUsage php remove_duplicates.php <input string>";
        return 1;
    }
    $inputString = $argv[1];
    echo removeDuplicates($inputString);
    return 0;
}
main($argc, $argv);