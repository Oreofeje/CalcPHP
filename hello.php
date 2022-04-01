<?php


// echo "hello php";
// print "hi php";


print_r ("Welcome to My Calculator and smart app \n");
print_r("===== \n");

$firstValue = readline("enter value first value");
$operator = readline("enter operator");

switch ($operator) {
  case in_array ($operator, ['/', '*', '+', '-']):
    break;
    default:
    print_r("invalid Operator\n");r
    return;
}

$secondValue = readline("enter the value of second number");
if ($operator === '/') $result = $firstValue / $secondValue;
if ($operator === '*') $result = $firstValue * $secondValue;
if ($operator === '+') $result = $firstValue + $secondValue;
if ($operator === '-') $result = $firstValue - $secondValue;

print_r("result is $result \n");
