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