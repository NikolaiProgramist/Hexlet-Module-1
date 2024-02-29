<?php

print_r('Hello, World!');

// Lesson 5

print_r(3 ** (4 - 2));

// Lesson 6

print_r("- Did Joffrey agree?\n- He did. He also said \"I'm using this \\n\".");

// Lesson 7

print_r((string) 3.04 . ' times');

// Lesson 8

$name = 'anneirB';

// Lesson 9

$eurosCount = 100;
$eurosPerDollars = 1.25;
$dollarsPerRubles = 60;

$dollarsCount = $eurosCount * $eurosPerDollars;
$rublesCount = $dollarsCount * $dollarsPerRubles;

print_r($dollarsCount);
print_r("\n");
print_r($rublesCount);

// Lesson 10

$stark = 'Arya';

print_r("Do you want to eat, {$stark}?");

// Lesson 11
// ...

// Lesson 12

$one = "Naharis";
$two = "Mormont";
$three = "Sand";

// Firs way

print_r($one[2] . $two[1] . $three[3] . $two[1] . $two[2]);

// Second way

// print_r("\n");
// print_r(substr($one, 2, 1) . substr($two, 1, 1) . substr($three, 3, 1) . substr($two, 1, 1) . substr($two, 2, 1));

// Lesson 13

$text = 'mount';

print_r(ucfirst($text));

// Lesson 14

$text = 'Never forget what you are, for surely the world will not';

print_r("First: " . $text[0] . "\n" . "Last: " . $text[-1]);

// Lesson 15

print_r(min(3, 10, 22, -3, 0));

// Lesson 16

$text = 'knock!';

print_r(strtoupper($text));

// Lesson 17

$motto = 'Family, Duty, Honor';

print_r(gettype($motto));

// Lesson 18

function printMotto()
{
    print_r('Winter is coming');
}

// Lesson 19

function getCurrentYear()
{
    return (int) substr(date('Y-m-d'), 0, 4);
}

// Lesson 20

function truncate($str, $lenght)
{
    return substr($str, 0, $lenght) . '...';
}

// Lesson 21

function getHiddenCard($str, $lenght = 4)
{
    $trimmedString = substr($str, -4, 4);
    return str_repeat('*', $lenght) . $trimmedString;
}

// Lesson 22

function getAgeDifference($year1, $year2)
{
    $difference = $year1 - $year2;
    return 'The age difference is ' . abs($difference);
}

// Lesson 23

function getFormattedBirthday($day, $month, $year)
{
    $dateFormat = '%02d-%02d-%04d';
    return sprintf($dateFormat, $day, $month, $year);
}

// Lesson 24

function isLeapYear($year)
{
    return ($year % 400 === 0) || ($year % 4 === 0 && $year % 100 !== 0);
}

// Lesson 25

function normalizeUrl($url)
{
    if (substr($url, 0, 8) === 'https://') {
        return $url;
    } elseif (substr($url, 0, 7) === 'http://') {
        return 'https' . substr($url, 4, strlen($url));
    } else {
        return 'https://' . $url;
    }
}

// Lesson 26 (1)

function convertText($text)
{
    $result = strrev($text);

    if ($text[0] === strtoupper($text[0])) {
        $result = $text;
    }

    return $result;
}

// Lesson 26 (2)

function convertText2($text)
{
    return $text[0] === strtoupper($text[0]) ? $text : strrev($text);
}

// Lesson 27

function calculate($operation, $number1, $number2)
{
    switch ($operation) {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
        case '/':
            return $number1 / $number2;
        default:
            return null;
    }
}

// Lesson 28

function printNumbers($firstNumber)
{
    while ($firstNumber >= 1) {
        print_r($firstNumber);
        print_r("\n");
        $firstNumber--;
    }

    print_r('finished!');
}

// Lesson 29

function joinNumbersFromRange($start, $finish)
{
    $i = $start;
    $result = '';

    while ($i <= $finish) {
        $result = "{$result}{$i}";
        $i++;
    }

    return $result;
}

// Lesson 30

function isArgumentsForSubstrCorrect($str, $i, $length)
{
    if ($length < 0) {
        return false;
    } elseif ($i < 0) {
        return false;
    } elseif ($i >= strlen($str)) {
        return false;
    } elseif ($i + $length > strlen($str)) {
        return false;
    }

    return true;
}

// Lesson 31

function sumOfSeries($first, $last)
{
    $result = 0;

    for ($i = $first; $i <= $last; $i++) {
        $result += $i;
    }

    return $result;
}

// Lesson 32

function invertCase($text)
{
    // BEGIN (write your solution here)
    $result = '';

    for ($i = 0; $i < mb_strlen($text); $i++) {
        if (mb_substr($text, $i, 1) === mb_strtoupper(mb_substr($text, $i, 1))) {
            $result .= mb_strtolower(mb_substr($text, $i, 1));
        } else {
            $result .= mb_strtoupper(mb_substr($text, $i, 1));
        }
    }

    return $result;
    // END
}

// Lesson 33

function getCustomDate($timestamp)
{
    return date('d/m/Y', $timestamp);
}

// Lesson 34

function isPalindrome($str)
{
    $revStr = '';

    for ($i = mb_strlen($str) - 1; $i >= 0; $i--) {
        $revStr .= mb_substr($str, $i, 1);
    }

    if ($str === $revStr) {
        return true;
    } else {
        return false;
    }
}

// Lesson 35

function generateError()
{
    // BEGIN (write your solution here)
    fakeFunction();
    // END
}

// Lesson 36

require_once 'src/Strings.php';

function isPalindrome2($str)
{
    return reverse($str) === $str ? true : false;
}

// Lesson 37

function isPalindrome3($str)
{
    return $str === \Strings\reverse($str);
}

// Lesson 38

// Solution.php

//namespace App\Solution;

// NS.php

//namespace App\Internal\NS;

// Lesson 39

use function App\Symbols\isVowel;

function countVowels($string)
{
    $count = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        if (isVowel($string[$i])) {
            $count++;
        }
    }

    return $count;
}

// Lesson 40

function reverse(int $number): int
{
    if ($number >= 0) {
        return (int) strrev((string) $number);
    } else {
        return ((int) strrev((string) $number)) / -1;
    }
}