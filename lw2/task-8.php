<?php
/**
 * Created by PhpStorm.
 * User: mikus_000
 * Date: 14.02.2018
 * Time: 17:04
 */
//8. #20 Доработайте программу из задания 7, добавьте проверку данных, которые пользователь передает через GET-параметры. Должны учитываться следующие случаи:
//Переданы не все параметры arg1, arg2 и operation;
//Один или несколько параметров имеют некорректные имена (например, arg1, arg2 и op);
//Переданы лишние параметры (например, arg1, arg2, operation, name);
//Параметры arg1 и arg2 содержат данные, отличные от числовых;
//Параметр operation содержит некорректную операцию;
//Происходит деление на ноль.
//
//Информацию о найденной ошибке необходимо отобразить пользователю на странице в формате HTML.
?>
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
header('Content-Type: text/plain');

function isValidParameterName()
{
    return (isset($_GET['arg1']) && isset($_GET['arg2']) && isset($_GET['operation']));
}

function isDigit()
{
    return (is_numeric($_GET['arg1']) && is_numeric($_GET['arg2']));
}

function calc(&$result)
{
    if ($_GET['operation'] === 'add') {
        $result = $_GET['arg1'] + $_GET['arg2'];
        return true;
    } elseif ($_GET['ope`ration'] === 'sub') {
        $result = $_GET['arg1'] - $_GET['arg2'];
        return true;
    } elseif ($_GET['operation'] === 'mul') {
        $result = $_GET['arg1'] * $_GET['arg2'];
        return true;
    } elseif ($_GET['operation'] === 'div') {
        if ($_GET['arg2'] !== '0') {
            $result = $_GET['arg1'] / $_GET['arg2'];
            return true;
        } else {
            echo 'division by zero';
        }
    } else {
        echo 'Invalid operation.\nUsage: "add", "sub", "mul" or "div"';
    }
    return false;
}

function calculate(&$result)
{
    if (count($_GET) != 3) {
        echo 'invalid argument count\nUsage:calc.php?arg1=<digit>&arg2=<digit>&operation=add';
        return false;
    }
    if (!isValidParameterName()) {
        echo 'invalid parameter name';
        return false;
    }
    if (!isDigit()) {
        echo 'arg1 and arg2 should be digit';
        return false;
    }
    $result = 0;
    if (calc($result)) {
        return true;
    }
    return false;
}

$result = 0;
$success = calculate($result);
if ($success) {
    echo $result;
}