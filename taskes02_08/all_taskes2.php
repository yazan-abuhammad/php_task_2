<?php

echo implode('-', range(1, 10));
echo '<br>';
?>


<?php
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}

echo $total;
?>


<?php
$char = 'A';
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '<br>';
        echo $char . ' ';
    }
    $char++;

    echo PHP_EOL;
}
?>

<?php
$num = 1;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '<br>';
        echo $num . ' ';
    }
    $num++;

    echo PHP_EOL;
}
?>
Nested for loop pattern with zeros:
php

<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j === $i) {
            echo '<br>';
            echo $i . ' ';
        } else {
            echo '<br>';
            echo '0 ';
        }
    }
    echo '<br>';
    echo PHP_EOL;
}
?>



<?php
$input = 5;
$factorial = 1;

for ($i = 1; $i <= $input; $i++) {
    $factorial *= $i;
}

echo '<br>';
echo $factorial;
?>

<?php
$limit = 10; // Change this value to control the number of Fibonacci numbers to generate

$a = 0;
$b = 1;
echo '<br>';
echo $a . ', ' . $b . ', ';

for ($i = 2; $i < $limit; $i++) {
    $c = $a + $b;
    echo '<br>';
    echo $c . ', ';
    $a = $b;
    $b = $c;
}
?>

<?php
$text = "Orange Coding Academy";
$charToCount = "c";
$count = 0;

for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] === $charToCount) {
        $count++;
    }
}

echo '<br>';
echo $count;
?>

<?php
echo '<br>';
echo '<table cellpadding="3px" cellspacing="0px">';
for ($i = 1; $i <= 6; $i++) {
    echo '<br>';
    echo '<tr>';
    for ($j = 1; $j <= 5; $j++) {
        echo '<br>';
        echo '<td>' . $i . ' * ' . $j . ' = ' . ($i * $j) . '</td>';
    }
    echo '<br>';
    echo '</tr>';
}
echo '<br>';
echo '</table>';
?>

<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {

        echo "FizzBuzz ";
    } elseif ($i % 3 === 0) {

        echo "Fizz ";
    } elseif ($i % 5 === 0) {

        echo "Buzz ";
    } else {

        echo $i . " ";
    }
}
?>

<?php
$n = 5; // Change this value to control the number of lines
$num = 1;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '<br>';
        echo $num . ' ';
        $num++;
    }
    echo '<br>';
    echo PHP_EOL;
}
?>

<?php
$n = 5; // Change this value to control the number of lines

for ($i = 1; $i <= $n; $i++) {
    // Print spaces
    for ($k = $n; $k > $i; $k--) {

        echo ' ';
    }

    // Print letters
    for ($j = 1; $j <= $i; $j++) {
        echo '<br>';
        echo chr(64 + $j) . ' ';
    }

    echo '<br>';
    echo PHP_EOL;
}

for ($i = $n - 1; $i >= 1; $i--) {
    // Print spaces
    for ($k = $n; $k > $i; $k--) {

        echo ' ';
    }

    // Print letters
    for ($j = 1; $j <= $i; $j++) {

        echo chr(64 + $j) . ' ';
    }


    echo PHP_EOL;
}
?>