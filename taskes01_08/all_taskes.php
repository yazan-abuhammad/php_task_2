<?php

// Task 1
$colors = array('red', 'green', 'white');
$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo '<br>';
echo $paragraph . "\n\n";

// Task 2
$colors = array('white', 'green', 'red');
echo '<br>';
echo "<ul>\n";
foreach ($colors as $color) {
    echo '<br>';
    echo "<li>$color</li>\n";
}
echo '<br>';
echo "</ul>\n\n";

// Task 3
$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

asort($cities);
foreach ($cities as $country => $capital) {
    echo '<br>';
    echo "The capital of $country is $capital\n";
}
echo '<br>';
echo "\n";

// Task 4
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
$firstElement = reset($color);
echo '<br>';
echo "First Element: $firstElement\n\n";

// Task 5
$array = array(1, 2, 3, 4, 5);
$location = 4;
$newItem = '$';
array_splice($array, $location, 0, $newItem);
echo '<br>';
echo implode(' ', $array) . "\n\n";

// Task 6
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
foreach ($fruits as $key => $value) {
    echo '<br>';
    echo "$key = $value\n";
}
echo '<br>';
echo "\n";

// Task 7
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$averageTemperature = array_sum($temperatures) / count($temperatures);
sort($temperatures);
$lowestTemperatures = array_slice($temperatures, 0, 5);
$highestTemperatures = array_slice($temperatures, -5);
echo '<br>';
echo "Average Temperature is: $averageTemperature\n";
echo '<br>';
echo "List of five lowest temperatures: " . implode(', ', $lowestTemperatures) . "\n";
echo '<br>';
echo "List of five highest temperatures: " . implode(', ', $highestTemperatures) . "\n\n";

// Task 8
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$mergedArray = array_merge($array1, $array2);
print_r($mergedArray);
echo '<br>';
echo "\n\n";

// Task 9
$colors = array("red", "blue", "white", "yellow");
$uppercaseColors = array_map('strtoupper', $colors);
print_r($uppercaseColors);
echo '<br>';
echo "\n\n";

// Task 10
$colors = array("RED", "BLUE", "WHITE", "YELLOW");
$lowercaseColors = array_map('strtolower', $colors);
print_r($lowercaseColors);
echo '<br>';
echo "\n\n";

// Task 11
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 === 0) {
        echo '<br>';
        echo "$i, ";
    }
}
echo '<br>';
echo "\n\n";

// Task 12
$words =  array("abcd", "abc", "de", "hjjj", "g", "wer");
$shortestLength = min(array_map('strlen', $words));
$longestLength = max(array_map('strlen', $words));
echo '<br>';
echo "The shortest array length is $shortestLength. The longest array length is $longestLength.\n\n";

// Task 13
$randomNumbers = array();
$min = 11;
$max = 20;
while (count($randomNumbers) < 10) {
    $randomNumber = mt_rand($min, $max);
    if (!in_array($randomNumber, $randomNumbers)) {
        $randomNumbers[] = $randomNumber;
    }
}
sort($randomNumbers);
echo '<br>';
echo implode(' ', $randomNumbers) . "\n\n";

// Task 14
$array1 = array(2, 0, 10, 12, 6);
$lowestNonZero = min(array_filter($array1));
echo '<br>';
echo $lowestNonZero . "\n";
