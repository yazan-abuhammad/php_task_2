<?php

// Task 1
$year = 2013;
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo '<br>';
    echo "$year is a leap year.\n";
} else {
    echo '<br>';
    echo "$year is not a leap year.\n";
}

// Task 2
$temperature = 27;
if ($temperature < 20) {
    echo '<br>';
    echo "It is winter!\n";
} else {
    echo '<br>';
    echo "It is summertime!\n";
}

// Task 3
$firstInteger = 2;
$secondInteger = 2;
$sum = $firstInteger + $secondInteger;
if ($firstInteger === $secondInteger) {
    $result = $sum * 3;
    echo '<br>';
    echo "($firstInteger + $secondInteger) * 3 = $result\n";
} else {
    echo '<br>';
    echo "$firstInteger + $secondInteger = $sum\n";
}

// Task 4
$firstInteger = 10;
$secondInteger = 10;
$sum = $firstInteger + $secondInteger;
if ($sum === 30) {
    echo '<br>';
    echo "$sum\n";
} else {
    echo '<br>';
    echo "false\n";
}

// Task 5
$number = 20;
if ($number % 3 === 0) {
    echo '<br>';
    echo "true\n";
} else {
    echo '<br>';
    echo "false\n";
}

// Task 6
$number = 50;
if ($number >= 20 && $number <= 50) {
    echo '<br>';
    echo "true\n";
} else {
    echo '<br>';
    echo "false\n";
}

// Task 7
$numbers = [1, 5, 9];
$maxNumber = max($numbers);
echo '<br>';
echo "$maxNumber\n";

// Task 8
$units = 280;
if ($units <= 50) {
    $bill = $units * 2.50;
} elseif ($units <= 150) {
    $bill = 50 * 2.50 + ($units - 50) * 5.00;
} elseif ($units <= 250) {
    $bill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;
} else {
    $bill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;
}
echo '<br>';
echo "Monthly Electricity Bill: $bill JOD\n";

// Task 9
function add($num1, $num2)
{
    return $num1 + $num2;
}

function subtract($num1, $num2)
{
    return $num1 - $num2;
}

function multiply($num1, $num2)
{
    return $num1 * $num2;
}

function divide($num1, $num2)
{
    if ($num2 == 0) {
        return "Error: Cannot divide by zero.";
    }
    return $num1 / $num2;
}

$number1 = 10;
$number2 = 5;
echo '<br>';
echo "Addition: " . add($number1, $number2) . "\n";
echo '<br>';
echo "Subtraction: " . subtract($number1, $number2) . "\n";
echo '<br>';
echo "Multiplication: " . multiply($number1, $number2) . "\n";
echo '<br>';
echo "Division: " . divide($number1, $number2) . "\n";

// Task 10
$age = 15;
if ($age >= 18) {
    echo '<br>';
    echo "is eligible to vote.\n";
} else {
    echo '<br>';
    echo "is not eligible to vote.\n";
}

// Task 11
$number = -60;
if ($number > 0) {
    echo '<br>';
    echo "Positive\n";
} elseif ($number < 0) {
    echo '<br>';
    echo "Negative\n";
} else {
    echo '<br>';
    echo "Zero\n";
}
