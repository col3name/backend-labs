<?php
/**
 * Created by PhpStorm.
 * User: mikus_000
 * Date: 14.02.2018
 * Time: 16:30
 */
//4. Напишите PHP приложение print_query_string.php, которое выводит данные переданные
//#5 в запросе.
//
//   Пример:
//       Запрос:
//            HTTP 1.1 GET /print_query_string.php?my_name=Sarah&my_surname=Rever&message=British+are+coming+by+sea.
//       Ответ:
//          Content-Type: text/plain
//
//          Query string = 'my_name=Sarah&my_surname=Rever&message=British+are+coming+by+sea.'

header("Content-Type: text/plain");
echo "  Query string = \n'" . $_SERVER['QUERY_STRING'] . "'";