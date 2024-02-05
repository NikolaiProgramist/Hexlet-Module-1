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