<?php

//(#5) Напишите PHP-скрипт print_args.php, выполняющий вывод параметров, переданных в качестве аргументов командной строки, а также их количество.
//Программа должна корректно обрабатывать ситуацию, когда параметры не были указаны. В этом случае выводится информационное сообщение “No parameters were specified!”.
//Внимание! Данная программа запускается из командной строки, а не из браузера.
//
//Пример:
//php print_args.php Hello World!
//
//Вывод:
//Number of arguments: 2
//Arguments: Hello World!
/**
 * №1(#5)
 * Напишите PHP-скрипт print_args.php, выполняющий вывод параметров, переданных в качестве аргументов командной строки, а также их количество.
 * Программа должна корректно обрабатывать ситуацию, когда параметры не были указаны. В этом случае выводится информационное сообщение “No parameters were specified!”.
 * Внимание! Данная программа запускается из командной строки, а не из браузера.
 *
 * Пример:
 * php print_args.php Hello World!
 *
 * Вывод:
 * Number of arguments: 2
 * Arguments: Hello World!
 *
 */

function printArgc(&$argc, &$argv)
{
    echo "Number of arguments: " . $argc . "\nArguments: ";
    for ($i = 1; $i < $argc; ++$i) {
        echo $argv[$i];
        if ($i != $argc - 1) {
            echo " ";
        }
    }
}

function main($argc, $argv)
{
    if ($argc == 1) {
        echo "No parameters were specified!";
        return 1;
    }
    printArgc($argc, $argv);
    return 0;
}

main($argc, $argv);