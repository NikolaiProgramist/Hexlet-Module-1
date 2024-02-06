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