<!-- PHP script to check if the inserted number is a prime number: -->


<?php
function isPrime($number)
{


    for ($i = 2; $i <= sqrt($number); $i++) {
        echo $i . "<br>";
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

$number = 81;
if (isPrime($number)) {
    echo "<br>";
    echo $number . " is a prime number";
} else {
    echo "<br>";
    echo $number . " is not a prime number";
}
?>
<!-- PHP script to reverse a string: -->


<?php
function reverseString($str)
{
    return strrev($str);
}

$inputString = "remove";
$reversedString = reverseString($inputString);
echo "<br>";
echo $reversedString;
?>
<!-- PHP script to check if all string characters are lower case: -->


<?php
function isLowerCase($str)
{
    if (ctype_lower($str)) {
        return "Your String is Ok";
    } else {
        return "Your String contains uppercase characters";
    }
}

$inputString = "remove";
$result = isLowerCase($inputString);
echo "<br>";
echo $result;
?>
<!-- PHP function to swap two variables: -->


<?php
function swapVariables(&$x, &$y)
{
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$x = 12;
$y = 10;

echo "<br>";
echo "Before swapping: x = $x, y = $y<br>";
swapVariables($x, $y);
echo "<br>";
echo "After swapping: x = $x, y = $y";
?>
<!-- PHP script to swap two variables without a function: -->


<?php
$x = 12;
$y = 10;

echo "<br>";
echo "Before swapping: x = $x, y = $y<br>";
list($x, $y) = array($y, $x);
echo "<br>";
echo "After swapping: x = $x, y = $y";
?>
<!-- PHP function to check if a number is an Armstrong number or not: -->

<?php

function isArmstrongNumber($number)
{
    $sum = 0;
    $originalNumber = $number;
    $digits = strlen((string)$number);

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $digits);
        $number = (int)($number / 10);
    }

    return $sum === $originalNumber;
}

$number = 403;
if (isArmstrongNumber($number)) {
    echo "<br>";
    echo "$number is Armstrong Number";
} else {
    echo "<br>";
    echo "$number is not Armstrong Number";
}
?>
<!-- PHP function to check if a string is a palindrome or not: -->


<?php
function isPalindrome($str)
{
    $str = preg_replace('/[^A-Za-z0-9]/', '', $str);
    $str = strtolower($str);

    return $str === strrev($str);
}

$inputString = "Eva, can I see bees in a cave?";
if (isPalindrome($inputString)) {
    echo "<br>";
    echo "Yes, it is a palindrome";
} else {
    echo "<br>";
    echo "No, it is not a palindrome";
}
?>
<!-- PHP function to remove duplicates from an array: -->


<?php
function removeDuplicates($array)
{
    return array_values(array_unique($array));
}

$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = removeDuplicates($array1);

print_r($array1);
?>