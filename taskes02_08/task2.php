<?php


function getSeason($temperature) {
    if ($temperature < 20) {
        return "winter";
    } else {
        return "summer";
    }
}

$temperature = 27;

$season = getSeason($temperature);

echo "It is $season!";
Explanation:
