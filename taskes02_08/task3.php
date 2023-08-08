<?php

$n = 5; // Number of rows (and columns) in the pattern

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j <= $n - $i) {
            echo "1 ";
        } else {
            echo $i . " ";
        }
    }
    echo PHP_EOL;
}
