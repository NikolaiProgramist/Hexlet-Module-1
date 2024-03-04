<?php

echo 'Hello, World!';
// => Hello, World!

print_r('Hello, World!');
// => Hello, World!

// Lesson 5

// На следующей строке отступ равен одному табу
print_r (((8 / 2) + 5) - (-3 / 2));

print_r(((8 / 2) + 5) - (-3 / 2)); // => 10.5

// Lesson 6

//'Hello'
//'Goodbye'
//'G'
//' '
//''

print_r("Dracarys!");

//print_r('Dragon's mother');
// PHP Parse error: syntax error, unexpected 's' (T_STRING), expecting ',' or ')'

print_r("Dragon's mother");

// Dragon's mother said "No"

// Экранируется только ", так как в этой ситуации
// двойные кавычки имеют специальное значение
print_r("Dragon's mother said \"No\"");
// => Dragon's mother said "No"

// \ выводится, если после него идет обычный,
// а не специальный символ
print_r("Death is \so terribly final");
// => Death is \so terribly final

print_r("\\");
// => \

print_r("- Are you hungry?\n- Aaaarrrgh!");

// - Are you hungry?
// - Aaaarrrgh!

// Мы это не изучали, но вы должны знать правду
// Ниже код, который возвращает длину строки
strlen("a");    // 1
strlen("\n");   // 1 !!!
strlen("\n\n"); // 2 !!!

// Lesson 7

print_r(5);

print_r(10.234);

print_r(1 + '7'); // => 8

// Примеры немного искусственные
// В реальности этот механизм становится полезен при использовании переменных
print_r((string) 5);
print_r((int) '345');

// Преобразование типов можно использовать внутри составных выражений
print_r('Это ' . ((string) 5)); // => 'Это 5'

(int) '4';  // 4
5 + 4;      // 9
(string) 9; // '9'

// Lesson 8

// greeting - переводится как приветствие
$greeting = 'Father!';
print_r($greeting);
print_r("\n");
print_r($greeting);
// => Father!
// => Father!

// greeting - переводится как приветствие
$greeting = 'Father!';
print_r($greeting); // => Father!

$greeting = 'Mother!';
print_r($greeting); // => Mother!

//print_r($greeting);
//$greeting = 'Father!';
// PHP Notice:  Undefined variable: greeting in /private/var/tmp/index.php on line 3

const PI = 3.14;
print_r(PI); // => 3.14

$str = <<<EOT
Пример строки,
охватывающей несколько строк,
с использованием heredoc-синтаксиса.
Здесь не нужно экранировать ни одинарные ', ни двойные " кавычки.
EOT;
print_r($str);
// => Пример строки,
// => охватывающей несколько строк,
// => с использованием heredoc-синтаксиса.
// => Здесь не нужно экранировать ни одинарные ', ни двойные " кавычки.

// Lesson 9

$dollarsCount = 50 * 1.25;
print_r($dollarsCount);

// 62.5             // 62.5
// 50 * 1.25        // 62.5
// 120 / 10 * 2     // 24
// (int) '100'      // 100
//
// "hello"          // "hello"
// "Good" . "will"  // "Goodwill"

$rublesPerDollar = 60;
$dollarsCount = 50 * 1.25; // 62.5
$rublesCount = $dollarsCount * $rublesPerDollar; // 3750

print_r($rublesCount);

$what = "Kings" . "road";
print_r($what); // => "Kingsroad"

// Конкатенируем строку и переменную, в которой записана строка
$first = "Kings";
$what = $first . "road";
print_r($what); // => "Kingsroad"

// Конкатенируем две переменные, в которых записаны строки
$last = 'road';
$what = $first . $last;
print_r($what); // => "Kingsroad"

// Lesson 10

$firstName = 'Joffrey';
$greeting = 'Hello';

print_r($greeting . ", " . $firstName . "!"); // => 'Hello, Joffrey!'

$firstName = 'Joffrey';
$greeting = 'Hello';

// Обратите внимание на ограничители строки — это двойные кавычки
// Интерполяция не работает с одинарными кавычками
print_r("{$greeting}, {$firstName}!"); // => Hello, Joffrey!

// Lesson 11

$firstName = 'Alexander';

print_r($firstName[0]); // => A

$firstName = 'Alexander';

// Длина строки 9, поэтому последний индекс — это 8
print_r($firstName[8]);  // => r

// Вопрос на самопроверку. Что выведет этот код?
$magic = '\nyou';
print_r($magic[1]); // => ?

$firstName = 'Alexander';

print_r($firstName[-1]); // => r

$firstName = 'Alexander';
$index = 0;

print_r($firstName[$index]); // => A

// Lesson 12

// Вызов функции strrev с аргументом 'Hello!'
$result = strrev('Hello!');
print_r($result); // => '!olleH'

$result = pow(2, 3); // 2 * 2 * 2
print_r($result); // => 8

// В современном PHP появился специальный оператор для возведения в степень
$result = 2 ** 3; // 8

$result = rand();

3 + 5; // 8
sum(3, 5); // 8

// Или даже так
// +(3, 5);

// В PHP такой синтаксис невозможен, но есть языки (например, lisp),
// где оно выглядит очень похоже

// Lesson 13

//abs(int|float $num): int|float
//
//Возвращает абсолютное значение num.

$result = round(10.25, 0); // 10

$result = round(10.25); // 10

$result = round(10.25, 1); // 10.3

// Lesson 14

// 1 + 5 * 3
// 'He' . 'Let'
// Переменные могут быть частью выражения
// $rate * 5

// Здесь выражение — это 1 + 5
$sum = 1 + 5;
print_r(1 + 5);

$name = 'php';
// Индексы начинаются с нуля
// Вызов метода и вычитание вместе!
$lastIndex = strlen($name) - 1;
print_r($lastIndex); // 2

$name = 'php';
print_r(strlen($name) - 1); // => 2

$name = 'Toto';
// Используется интерполяция
print_r("Имя пользователя: {$name}");
// => Имя пользователя: Toto

// Lesson 15

max(1, 10, 3); // 10
max(1, -3, 2, 3, 2); // 3

// max(mixed $value, mixed ...$values): mixed

// Lesson 16

strrev('cat'); // tac
strrev('cat'); // tac

rand(); // 827606195
rand(); // 635369726

// Lesson 17
// ...

// Lesson 18

// Гипотетический пример
// Место откуда берется функция
// namespace Some\Email\Package\send;

$email = 'support@hexlet.io';
$title = 'Помогите';
$body = 'Я написал историю успеха, как я могу получить скидку?';

// Один маленький вызов — и много логики внутри
// send($email, $title, $body);

// Определение функции
// Определение не вызывает и не выполняет функцию
// Мы лишь говорим, что теперь такая функция существует
function showGreeting()
{
    $text = 'Hello, Hexlet!';
    print_r($text);

}

// Вызов функции
showGreeting(); // => 'Hello, Hexlet!'

// Минимальное определение функции, которая ничего не делает
function noop() {}

noop(); // Вызов есть, а смысла нет
// Такая функция тоже бывает полезна,
// но это относится к продвинутым темам

// Lesson 19

function saveEmail()
{
    $email = "  SuppORT@hexlet.IO";
    // Обрезаем пробельные символы
    // Функция trim() удаляет пробелы из начала и конца строки
    $trimmedEmail = trim($email);
    $preparedEmail = strtolower($trimmedEmail);
    print_r($preparedEmail);
    // Здесь будет запись в базу данных
}

$message = greeting();
// Чтобы увидеть null, нужно воспользоваться функцией var_dump()
var_dump($message); // => NULL

function greeting()
{
    return 'Hello, Hexlet!';
}

// Теперь мы можем использовать результат работы функции
$message = greeting();
print_r($message); // => 'Hello, Hexlet!'
// И даже выполнить какие-то действия над результатом
print_r(strtoupper($message)); // => 'HELLO, HEXLET!'

function greeting2()
{
    return 'Hello, Hexlet!';
    print_r('Я никогда не выполнюсь');
}

function greeting3()
{
    print_r('Я появлюсь в консоли');
    return 'Hello, Hexlet!';
}
// И напечатает текст на экран и вернет значение
$message = greeting3();

function greeting4()
{
    $message = 'Hello, Hexlet!';
    return $message;
}

function doubleFive()
{
    // или return 5 + 5
    $result = 5 + 5;
    return $result;
}

// Lesson 20

// Принимает на вход один параметр любого типа
print_r('я параметр');
// Принимает на вход два числовых параметра:
// Первый — округляемое число
// Второй — число знаков после запятой, которые нужно оставить
round(10.1245, 3); // 10.125
// Принимает на вход три строковых параметра:
// Первый — что ищем
// Второй — на что меняем
// Третий — строка, в которой производим замену
str_replace('go', 'mo', 'google'); // 'moogle'

// Передача параметров напрямую без переменных
// getLastChar('Hexlet'); 't'
// Передача параметров через переменные
// $name1 = 'Hexlet';
// getLastChar($name1); 't'
// $name2 = 'Goo';
// getLastChar($name2); 'o'

function getLastChar($str)
{
    // Вычисляем индекс последнего символа как длина строки - 1
    return $str[strlen($str) - 1];
}

// getLastChar(); такой код не имеет смысла
// ArgumentCountError: Too few arguments to function getLastChar(), 0 passed

// Функция по нахождению среднего числа
function average($x, $y)
{
    return ($x + $y) / 2;
}
average(1, 5); // 3
average(1, 2); // 1.5

// Lesson 21

// Функция возведения в степень
// Второй параметр имеет значение по умолчанию 2
function myPow($x, $base = 2)
{
    return $x ** $base;
}

// Три во второй степени (двойка задана по умолчанию)
myPow(3); // 3 * 3 = 9
// Три в третьей степени
myPow(3, 3); // 3 * 3 * 3 = 27

function myPrint($text = 'nothing')
{
    print_r($text);
}

myPrint(); // => "nothing"
myPrint("Hexlet"); // => "Hexlet"

//function f($a = 5, $b = 10, $c = 100)
//{
//    ...
//}

// Такой код завершится с ошибкой
//function f($a = 5, $b = 10, $c = 100, $x)
//{
//    ...
//}
//
//// И такой
//function f($a = 5, $b = 10, $x, $c = 100)
//{
//    ...
//}
//
//// А вот такой сработает
//function f($x, $a = 5, $b = 10, $c = 100)
//{
//    ...
//}
//
//// И такой
//function f($x, $y, $a = 5, $b = 10, $c = 100)
//{
//    ...
//}

// Lesson 22

//$age = 5;
//
//function generate()
//{
//    return $age + 3;
//}
//
//$result = generate();
//
//Error

$age = 5;

function changeAge()
{
    $age = 8;
}

changeAge();

print_r($age); // => 5

const AGE = 5;

function generate()
{
    return AGE + 3;
}

$result = generate();

print_r($result); // => 8

// Lesson 23

$x = 'Father!';
print_r($x);
print_r($x);

$unpaidOrderCountFromClientIndebtedInPreviousQuarter = 0;

$eurosCount = 1000;
$dollarsCount = $eurosCount * 1.25; // 1250
$rublesCount = $dollarsCount * 60;  // 75000

print_r($rublesCount);

$dollarsPerEuro = 1.25;
$rublesPerDollar = 60;

$eurosCount = 1000;
$dollarsCount = $eurosCount * $dollarsPerEuro;   // 1250
$rublesCount = $dollarsCount * $rublesPerDollar; // 75000

print_r($rublesCount);

// Lesson 24

$result = 5 > 4;
print_r($result); // => true
print_r('one' != 'one'); // => false

function isInfant($age)
{
    return $age < 1;
}

// Для вывода bool используем var_dump(), а не print_r()
var_dump(isInfant(3));   // => bool(false)
var_dump(isInfant(0.5)); // => bool(true)

//function isEven($number)
//{
//    return $number % 2 === 0;
//}
//
//isEven(10); // true
//isEven(3);  // false

function hasSpecialChars($str)
{
    // Проверяет содержание специальных символов в строке
}

// Функция принимает пароль и проверяет, соответствует ли он условиям
function isCorrectPassword($password)
{
    $length = strlen($password);
    // Скобки задают приоритет, чтобы показать, что к чему относится
    return ($length >= 8 && $length <= 20) && hasSpecialChars($password);
}

isCorrectPassword('qwerty'); // false
isCorrectPassword('qwerty1234'); // true
isCorrectPassword('zxcvbnmasdfghjkqwertyui'); // false

//function isEven($number)
//{
//    return $number % 2 === 0;
//}
//
//isEven(10);  // true
//!isEven(10); // false
//// В логике двойное отрицание подобно отсутствию отрицания вообще
//!!isEven(10); // true

print_r(true);   // => 1
print_r(false);  // => (на экран выводится пустая строка)
print_r(0 || 1); // => 1

var_dump('' === false); // => false
var_dump('' == false);  // => true

$answer = true;
var_dump(!$answer);  // => false
var_dump(!!$answer); // => true

// Lesson 25

//function getTypeOfSentence($sentence)
//{
//    // Простой способ извлечь последний символ
//    $lastChar = $sentence[-1];
//    if ($lastChar === '?') {
//        return 'question';
//    }
//
//    return 'normal';
//}
//
//getTypeOfSentence('Hodor');  // normal
//getTypeOfSentence('Hodor?'); // question
//
//function getTypeOfSentence($sentence)
//{
//    $lastChar = $sentence[-1];
//
//    if ($lastChar === '?') {
//        $sentenceType = 'question';
//    } else {
//        $sentenceType = 'normal';
//    }
//
//    return "Sentence is {$sentenceType}";
//}
//
//getTypeOfSentence('Hodor');  // Sentence is normal
//getTypeOfSentence('Hodor?'); // Sentence is question
//
//function getTypeOfSentence($sentence)
//{
//    $lastChar = $sentence[-1];
//
//    if ($lastChar !== '?') {
//        $sentenceType = 'normal';
//    } else {
//        $sentenceType = 'question';
//    }
//
//    return "Sentence is {$sentenceType}";
//}
//
//function getTypeOfSentence($sentence)
//{
//    $lastChar = $sentence[-1];
//
//    if ($lastChar === '!') {
//        $sentenceType = 'exclamation';
//    } else {
//        $sentenceType = 'normal';
//    }
//
//    if ($lastChar === '?') {
//        $sentenceType = 'question';
//    }
//
//    return "Sentence is {$sentenceType}";
//}
//
//getTypeOfSentence('Who?'); // 'Sentence is question'
//getTypeOfSentence('No');   // 'Sentence is normal'
//getTypeOfSentence('No!');  // 'Sentence is exclamation'
//
//function getTypeOfSentence($sentence)
//{
//    $lastChar = $sentence[-1];
//
//    if ($lastChar === '?') {
//        $sentenceType = 'question';
//    } elseif ($lastChar === '!') {
//        $sentenceType = 'exclamation';
//    } else {
//        $sentenceType = 'normal';
//    }
//
//    return "Sentence is {$sentenceType}";
//}

// Lesson 26

function abs2($number)
{
    if ($number >= 0) {
        return $number;
    }

    return -$number;
}

abs2(10);  // 10
abs2(-10); // 10

function abs3($number)
{
    return $number >= 0 ? $number : -$number;
}

//<predicate> ? <expression on true> : <expression on false>`

function getTypeOfSentence($sentence)
{
    $lastChar = substr($sentence, -1);

    if ($lastChar === '?') {
        return 'question';
    }

    return 'normal';
}

function getTypeOfSentence2($sentence)
{
    $lastChar = substr($sentence, -1);

    return ($lastChar === '?') ? 'question' : 'normal';
}

getTypeOfSentence2('Hodor');  // normal
getTypeOfSentence2('Hodor?'); // question

function generateGreeting($name, $nickname)
{
    if ($name) {
        return "Hello, {$name}!";
    } else {
        return "Hello, {$nickname}!";
    }
}

generateGreeting('Bob', 'CoolBob86'); // 'Hello, Bob!'
generateGreeting('', 'CoolBob86');    // 'Hello, CoolBob86!'

function generateGreeting2($name, $nickname)
{
    return $name ? "Hello, {$name}!" : "Hello, {$nickname}!";
}

function generateGreeting3($name, $nickname)
{
    $user = $name ?: $nickname;
    return "Hello, {$user}!";
}

// Lesson 27

//if ($status === 'processing') {
//    // Делаем раз
//} elseif ($status === 'paid') {
//    // Делаем два
//} elseif ($status === 'new') {
//    // Делаем три
//} else {
//    // Делаем четыре
//}

//switch ($status) {
//    case 'processing': // status == processing
//        // Делаем раз
//        break;
//    case 'paid': // status == paid
//        // Делаем два
//        break;
//    case 'new': // status == new
//        // Делаем три
//        break;
//    default: // else
//        // Делаем четыре
//}

//switch ($count) {
//    case 1:
//        // Делаем что-то полезное
//        break;
//    case 2:
//        // Делаем что-то полезное
//        break;
//    default:
//        // Что-то делаем
//}
//
//function doSomethingGood($count)
//{
//    // Заполняем
//    switch ($count) {
//        case 1:
//            $result = 'one';
//            break;
//        case 2:
//            $result = 'two';
//            break;
//        default:
//            $result = null;
//    }
//
//    // Возвращаем
//    return $result;
//}
//
//function doSomethingGood($count)
//{
//    switch ($count) {
//        case 1:
//            return 'one';
//        case 2:
//            return 'two';
//        default:
//            return null;
//    }
//}

// Lesson 28

function printNumbers($lastNumber)
{
    // Переменная i — это сокращение от index (порядковый номер)
    // Он используется по общему соглашению во множестве языков
    // в качестве счетчика цикла
    $i = 1;

    while ($i <= $lastNumber) {
        print_r($i);
        print_r("\n");
        $i = $i + 1;
    }
    print_r('finished!');
}

printNumbers(3);
// => 1
// => 2
// => 3
// => finished!

function printNumbers2($lastNumber)
{
    $i = 1;

    // Этот цикл никогда не остановится
    // Он будет печатать всегда одно значение
    while ($i <= $lastNumber) {
        print_r($i);
    }
    print_r('finished!');
}

//while (true) {
//    // Что-то делаем
//}

// Lesson 29

function sumNumbersFromRange ($start, $finish)
{
    // Технически можно менять $start
    // Но входные аргументы нужно оставлять в исходном значении
    // Это сделает код проще для анализа
    $i = $start;
    $sum = 0; // Инициализация суммы

    while ($i <= $finish) { // Двигаемся до конца диапазона
        $sum = $sum + $i; // Считаем сумму для каждого числа
        $i = $i + 1; // Переходим к следующему числу в диапазоне
    }

    // Возвращаем получившийся результат
    return $sum;
}

function repeat($text, $times)
{
    // Нейтральный элемент для строк – пустая строка
    $result = '';
    $i = 1;

    while ($i <= $times) {
        // Каждый раз добавляем строку к результату
        $result = "{$result}{$text}";
        $i = $i + 1;
    }

    return $result;
}

function printNameBySymbol($name)
{
    $i = 0;
    // Такая проверка будет выполняться до конца строки,
    // включает последний символ
    // Его индекс — `длина строки - 1`
    while ($i < strlen($name)) {
        // Обращаемся к символу по индексу
        print_r("$name[$i]\n");
        $i = $i + 1;
    }
}

$name = 'Arya';
printNameBySymbol($name);
// => 'A'
// => 'r'
// => 'y'
// => 'a'

function reverse($str)
{
    $i = 0;
    // Нейтральный элемент для строк — это пустая строка
    $result = '';

    while ($i < strlen($str)) {
        $currentChar = $str[$i];
        // Соединяем в обратном порядке
        $result = "{$currentChar}{$result}";
        // Тоже самое через конкатенацию
        // $result = $currentChar . $result;
        $i = $i + 1;
    }

    return $result;
}

$name = 'Bran';
reverse($name); // 'narB'
// Проверка нейтрального элемента
reverse(''); // ''

// Lesson 30

function mysubstr($str, $length)
{
    $index = 0;
    $result = '';
    while ($index < $length) {
        $currentChar = $str[$index];
        $result = "{$result}{$currentChar}";
        $index = $index + 1;
    }

    return $result;
}

$str = 'If I look back I am lost';

mysubstr($str, 1); // 'I'
mysubstr($str, 7); // 'If I lo'

// Lesson 31

function reverseString($str)
{
    $result = '';

    for ($i = 0; $i < strlen($str); $i += 1) {
        $currentChar = $str[$i];
        $result = "{$currentChar}{$result}";
    }

    return $result;
}

$x = 5;

echo ++$x; // => 6
echo $x;   // => 6

echo $x++; // => 6
echo $x;   // => 7

// Lesson 32

echo strlen('Привет!'); // => 13

echo mb_strlen('Привет!'); // => 7

$str = 'Привет';
$symbol = mb_substr($str, 2, 1); // и

//printf("%g \n", 1.234); // => 1.234
//setlocale(LC_NUMERIC, 'ru_RU');
//printf("%g \n", 1.234); // => 1,234

//if (mb_strpos('Валар Моргулис', 'Моргулис')) { // 6
//    // ...
//}
//
//if (mb_strpos('Валар Моргулис', 'Валар')) { // 0
//    // ...
//}
//
//if (mb_strpos('Валар Моргулис', 'Валар') !== false) {
//    // ...
//}

// Lesson 33

time(); // 1532435204

date('Y'); // 2018

date('M', 123123123); // Nov

date('l jS \of F Y h:i:s A'); // Thursday 26th of July 2018 10:58:55 AM

mktime(0, 0, 0, 7, 1, 2000); // 962409600

// Lesson 34

function sumOfSeries($start, $finish)
{
    $sum = 0;
    for ($i = $start; $i < $finish; $i++) {
        print_r('new iteration !!!!');
        print_r($i);
        $sum += $i;
        print_r($sum);
    }

    return $sum;
}

sumOfSeries(3, 5);

// new iteration !!!!
// 3
// 3
// new iteration !!!!
// 4
// 7

// Lesson 35

//print_r('Hodor')
// PHP Parse error:  syntax error, unexpected end of file in /private/var/tmp/index.php on line 4

//$i += 3;
// PHP Notice:  Undefined variable: i in php shell code on line 1

//error_reporting(0);

//function foo()
//{
//    $i += 1;
//}
//
//foo(); // Notice: Undefined variable: i
//
//@foo(); // Ничего не выводится, как будто все хорошо

// Lesson 36

// file: print.php

//function sayHi()
//{
//    print_r('Hi!');
//}
//
//// file: index.php
//
//require_once 'print.php';
//
//sayHi(); // => Hi!

// file: print.php

//$x = 'Hi!';
//
//
//// file: index.php
//
//require_once 'print.php';
//
//print_r($x); // => Hi!

// file: print.php

//print_r("Hi from print.php!\n");
//
//// file: index.php
//
//require_once 'print.php';
//
//print_r("Hi from index.php!\n");

//php index.php
//
//Hi from print.php!
//Hi from index.php!

// index.php

//print_r("Hi from print.php!\n");
//print_r("Hi from index.php!\n");

// Lesson 37

// file: index.php

//function foo()
//{
//    print_r('one');
//}
//
//function foo()
//{
//    print_r('two');
//}
//php index.php
//# Невозможно переопределить существующую функцию
//# Ошибка падает на втором определении
//PHP Fatal error:  Cannot redeclare foo() (previously declared in /private/var/tmp/index.php:3)

// math.php

//namespace math;
//
//function sum($a, $b)
//{
//    return $a + $b;
//}
//
//// index.php
//
//require_once 'math.php';
//
//// Обратиться напрямую к функции sum не получится:
//// PHP Fatal error:  Uncaught Error: Call to undefined function sum()
//sum(3, 2);
//
//// Если указать пространство имен, то все работает
//\math\sum(5, 8); // 13

//require_once 'text.php';
//require_once 'number.php';
//
//// Эта функция повторяет строчку, переданную первым параметром столько раз, сколько указано во втором параметре
//\text\multiply('hi', 3); // hihihi
//\number\multiply(3, 2); // 6

// main.php

//require_once 'text.php';
//require_once 'number.php';
//
//namespace main;
//
//function multiply($a, $b)
//{
//    print_r('it works!');
//}
//
//function all()
//{
//    \text\multiply('ho', 2); // hoho
//    \number\multiply(3, 2); // 6
//
//    // Такой вызов неявно подставляет текущее пространство \main\
//    multiply(2, 3); // it works!
//}

// Lesson 38

//src/ # исходные файлы
//tests/
//composer.json
//composer.lock
//.git
//README.md

//my-site/
//src/
//Formatters/
//Pretty.php
//    Generator.php

//namespace Formatters\Pretty;
//
//function render($data)
//{
//    // some code
//}

//namespace Generator;
//
//function generate($data)
//{
//    return \Formatters\Pretty\render($data);
//}

// src/Formatters/Pretty.php
//namespace My\Site\Formatters\Pretty;

// some code

// src/Generator.php
//namespace My\Site\Generator;

// some code

// Lesson 39

//require_once(__DIR__ . '/src/Formatters/Pretty.php');
//
//namespace Generator;
//
//function generate($data)
//{
//    return \Formatters\Pretty\render($data);
//}
//
//require_once(__DIR__ . '/src/Formatters/Pretty.php');
//
//namespace Generator;
//
//use function Formatters\Pretty\render;
//
//function generate($data)
//{
//    return render($data);
//}
//
//// Подключаем файл, в котором определены функции:
//// cons(), car(), cdr(), toString()
//require_once(__DIR__ . '/src/Pairs.php');
//
//namespace Php\Pairs\Data\Lists;
//
//use function Php\Pairs\Pairs\cons;
//use function Php\Pairs\Pairs\car;
//use function Php\Pairs\Pairs\cdr;
//use function Php\Pairs\Pairs\toString;
//
//require_once(__DIR__ . '/src/Formatters/Pretty.php');
//require_once(__DIR__ . '/src/Formatters/Simple.php');
//
//namespace Generator;
//
//use function Formatters\Pretty\render;
//use function Formatters\Simple\render as simpleRender;
//
//function generate($data)
//{
//    return simpleRender($data);
//}

// Lesson 40

//function sayHelloTo($name)
//{
//    print_r("Hello, {$name}");
//}
//
//// В функцию передается не то, что ожидается:
//sayHelloTo([]);
//// PHP Notice:  Array to string conversion
//
//// Тип int говорит, что ожидается число
//function sayHelloTo(int $name)
//{
//    print_r("Hello, {$name}");
//}
//
//// Все, что может быть приведено к указанному типу, будет считаться подходящим
//sayHelloTo(false); // Hello, 0
//sayHelloTo('1'); // Hello, 1
//
//function sayHelloTo(string $name)
//{
//    print_r("Hello, {$name}");
//}
//
//sayHelloTo([]);
//// PHP Fatal error:  Uncaught TypeError: Argument 1 passed to sayHelloTo() must be of the type string, array given
//
//function get(string $text, int $index, $default = null)
//{
//    $length = strlen($text);
//    return ($index >= 0) && ($index < $length)  ? $text[$index] : $default;
//}
//
//get('hi', 3, 8); // 8
//
//get('ho', 'hey');
//// PHP Fatal error:  Uncaught TypeError: Argument 2 passed to get() must be of the type integer, string given
//
//function printStr(string $value)
//{
//    echo $value;
//}
//printStr(null);
//// PHP Fatal error:  Uncaught TypeError: Argument 1 passed to printStr() must be of the type string, null given
//
//function printStr(string $value = null)
//{
//    echo $value;
//}
//printStr(null);
//
//function sum(int $a, int $b): int
//{
//    return $a + $b;
//}
//
//function sayItLoud(string $text): void
//{
//    $loudText = "{$text}!";
//    print_r($loudText);
//}
//
//// Включаем режим строгой проверки
//declare(strict_types = 1);
//
//function AddIntAndFloat(int $a, float $b): int
//{
//    return $a + $b;
//}
//
//echo AddIntAndFloat(1.4, '2');
//// Fatal error: Uncaught TypeError: Argument 1 passed to AddIntAndFloat() must be of the type int, float given
//echo AddIntAndFloat(1, '2');
//// Fatal error: Uncaught TypeError: Argument 2 passed to AddIntAndFloat() must be of the type float, string given
//
//function isPersonMrSmith(?string $person): bool
//{
//    // Тут какая-то логика
//}
//
//isPersonMrSmith();
//// Fatal error: Uncaught ArgumentCountError: Too few arguments to function
//
//public function getName(string $person): ?string
//{
//    // Тут какая-то логика
//}

// Lesson 41

$a = 5;
$b = $a;
$a = 3;
echo $b; // => 5

$a = 5;
$b =& $a;
$a = 3;
echo $b; // => 3

// Либо так: function strangeFunction(&$text)
function strangeFunction(string &$text)
{
    $text = 'hei';
}

$text = 'money';

strangeFunction($text);
echo $text; // => hei

// Lesson 42
// ...