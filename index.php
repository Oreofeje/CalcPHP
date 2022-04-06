<?php

error_reporting(0);

print_r("Welcome to My Kodecamp Calculator");
print_r("===== \n");

$firstValue = readline(" enter first value : ");

// prevent rendering first value as string
if (is_numeric($firstValue) === false) {
  print_r("enter a figure as the first value please \n");
  return;
}


$operator = readline("enter operator : ");

switch ($operator) {
  case in_array($operator, ['/', '*', '+', '-']):
    break;
  default:
    print_r("invalid Operator\n");
    return;
}

$secondValue = readline("enter the value of second number : ");
// prevent rendering second value as string
if (is_numeric($secondValue) === false) {
  print_r("enter a figure as the second value please \n");
  return;
}

$divisorError = readline("the divisor should be greater than 0");



if ($operator === '/') $result = ($firstValue / $secondValue);
if ($operator === '*') $result = $firstValue * $secondValue;
if ($operator === '+') $result = $firstValue + $secondValue;
if ($operator === '-') $result = $firstValue - $secondValue;


if ($operator === '/' && $secondValue === 0) 
$result = $divisorError;

print_r("result is :" . $result . "\n");


?>

