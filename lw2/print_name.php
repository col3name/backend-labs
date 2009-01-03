<?php
/**
 * Created by PhpStorm.
 * User: mikus_000
 * Date: 14.02.2018
 * Time: 16:40
 */
//5. Напишите PHP приложение print_name.php, которое выводит сообщение "Hello, Dear <Name>!".
//#10 <Name> заменяется на значение параметра name, переданного в GET запросе.
//
//Пример:
//   Запрос:
//      HTTP 1.1 GET /print_name.php?name=Sarah
//
//   Ответ:
//      Content-Type: text/plain
//
//      Hello, Dear Sarah!

header("Content-Type: text/plain");
echo "Hello, Dear " . $_GET['name'] . "!";