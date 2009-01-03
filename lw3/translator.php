<?php

/**
 * №4 (#15)
 * Разработайте PHP-скрипт translator.php – переводчик с английского языка на русский. Слово для перевода
 * задается в GET-параметре word. Все переводы хранятся прямо в коде скрипта. Программа должна корректно
 * обрабатывать ситуации, когда параметр word отсутствует, или задан неверно. В этом случае сервер возвращает
 * код ответа 400. В случае, если запрошен перевод неизвестного слова, возвращается код ответа 404.
 *
 * Пример: /translator.php?word=Keyboard
 *
 * Ответ: Клавиатура
 *
 * 3.1 (#5) (Выполнение не обязательно).  Добавьте возможность перевода с русского на английский.
 * При этом скрипт все также должен принимать один параметр word.
 *
*/

function GetWordTranslate($word, &$wasError)
{
    $translate = [
        'Keyboard' => 'Клавиатура',
        'Сat' => 'Кот',
        'Language' => 'Язык',
        'Man' => 'Мужчина',
        'Woman' => 'Женщина',
        'Mouse' => 'Мышка',
        'Screen' => 'Экран',
        'Computer' => 'Компьютер',
        'Notebook' => 'Ноутбук',
        'Monitor' => 'Монитор',
    ];
    if (isset($translate[$word])) {
        $translate[$word];
        return $translate[$word];
    } else {
        $itemKey = array_search($word, $translate);
        if ($itemKey) {
            return $itemKey;
        } else {
            $wasError = true;
            header("Status: 404");
            return "";
        }
    }
}

function wordTranslate($word)
{
    $wasError = false;
    $translate = GetWordTranslate($word, $wasError);
    if (!$wasError) {
        echo $translate;
    } else {
        return false;
    }
    return true;
}

function main()
{
    if (count($_GET) != 1 || !isset($_GET['word']) || empty($_GET['word'])) {
        header("Status: 400");
        return 1;
    }
    $wordTranslated = $_GET['word'];
    $success = wordTranslate($wordTranslated);
    if (!$success) {
        return 1;
    }
    return 0;
}

main();

