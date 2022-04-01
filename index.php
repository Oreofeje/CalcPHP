<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>
    <?php
    echo 'Kodecamp PHP Task 1';
    ?>
  </h1>
</body>

</html>

<?php
// 1. calculator


// echo "hello php";
// print "hi php";

error_reporting(0);

print_r("Welcome to My Kodecamp Calculator");
print_r("===== \n");

$firstValue = readline(" enter value first value : ");
$operator = readline("enter operator : ");

switch ($operator) {
  case in_array($operator, ['/', '*', '+', '-']):
    break;
  default:
    print_r("invalid Operator\n");
    return;
}

$secondValue = readline("enter the value of second number : ");
$divisorError = readline("the divisor should be greater than 0");


if ($operator === '/') $result = ($firstValue / $secondValue);
if ($operator === '*') $result = $firstValue * $secondValue;
if ($operator === '+') $result = $firstValue + $secondValue;
if ($operator === '-') $result = $firstValue - $secondValue;

if ($operator === '/' && $secondValue === 0) $result = $divisorError;
//  {
//   echo "the divisor should be greater than 0 ";
// }
print_r("result is :" . $result . "\n");


?>

