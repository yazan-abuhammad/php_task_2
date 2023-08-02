<?php
// Task 1
$inputString = "Sample String";
$uppercaseString = strtoupper($inputString);
$lowercaseString = strtolower($inputString);
$firstLetterUppercase = ucfirst($inputString);
$eachWordCapitalized = ucwords($inputString);

// Task 2
$numericString = '085119';
$dateFormat = substr_replace(substr_replace($numericString, ':', 2, 0), ':', 5, 0);

// Task 3
$sentence = 'I am a full stack developer at orange coding academy';
$specificWord = 'Orange';
$wordFound = strpos(strtolower($sentence), strtolower($specificWord)) !== false ? 'Word Found!' : 'Word Not Found!';

// Task 4
$url = 'www.orange.com/index.php';
$fileName = basename($url);

// Task 5
$email = 'info@orange.com';
$username = strstr($email, '@', true);

// Task 6
$stringToExtractFrom = 'info@orange.com';
$lastThreeCharacters = substr($stringToExtractFrom, -3);

// Task 7
$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
$randomPassword = '';
for ($i = 0; $i < 8; $i++) {
    $randomPassword .= $characters[rand(0, strlen($characters) - 1)];
}

// Task 8
$sampleSentence = 'That new trainee is so genius.';
$sampleWord = 'Our';
$words = explode(' ', $sampleSentence);
$words[0] = strtolower($sampleWord);
$modifiedSentence = implode(' ', $words);

// Task 9
$string1 = 'dragonball';
$string2 = 'dragonboll';
$position = strspn($string1 ^ $string2, "\0");
$firstDifference = "First difference between two strings at position $position: \"$string1[$position]\" vs \"$string2[$position]\"";

// Task 10
$stringToArray = "Twinkle, twinkle, little star.";
$array = explode(", ", $stringToArray);

// Task 11
$inputCharacter = 'a';
$nextCharacter = chr(ord($inputCharacter) + 1);

// Task 12
$originalString = 'The brown fox';
$positionToInsert = 4;
$stringToInsert = 'quick';
$modifiedString = substr_replace($originalString, $stringToInsert . ' ', $positionToInsert, 0);

// Task 13
$numberString = '0000657022.24';
$numberWithoutZeroes = ltrim($numberString, '0');

// Task 14
$originalString = 'The quick brown fox jumps over the lazy dog';
$stringToRemove = 'fox';
$modifiedString = str_replace($stringToRemove, '', $originalString);

// Task 15
$originalString = 'The quick brown fox jumps over the lazy dog---';
$modifiedString = rtrim($originalString, '-');

// Task 16
$specialCharactersString = '\"\1+2/3*2:2-3/4*3';
$filteredString = preg_replace('/[^0-9 ]/', '', $specialCharactersString);

// Task 17
$originalString = 'The quick brown fox jumps over the lazy dog';
$wordsArray = explode(' ', $originalString);
$selectedWords = implode(' ', array_slice($wordsArray, 0, 5));

// Task 18
$numericString = '2,543.12';
$commaRemovedString = str_replace(',', '', $numericString);

// Task 19
$alphabet = implode(' ', range('a', 'z'));

// Displaying Results
echo "Task 1:\n";
echo "Uppercase String: $uppercaseString\n";
echo "Lowercase String: $lowercaseString\n";
echo "First Letter Uppercase: $firstLetterUppercase\n";
echo "Each Word Capitalized: $eachWordCapitalized\n\n";

echo '<br>';
echo '<br>';
echo '<br>';

echo "Task 2:\n";
echo "Formatted Time: $dateFormat\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 3:\n";
echo "Sample Output: '$sentence'\n";
echo "Sample Word: '$specificWord'\n";
echo " '$wordFound'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 4:\n";
echo "Sample Output: '$url'\n";
echo " '$fileName'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 5:\n";
echo "Sample Output: '$email'\n";
echo " '$username'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 6:\n";
echo "Sample Output: '$stringToExtractFrom'\n";
echo " '$lastThreeCharacters'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 7:\n";
echo "Sample Output: '$characters'\n";
echo " '$randomPassword'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 8:\n";
echo "Sample Output: '$sampleSentence'\n";
echo "Sample Word: '$sampleWord'\n";
echo " '$modifiedSentence'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 9:\n";
echo "String1: '$string1'\n";
echo "String2: '$string2'\n";
echo " '$firstDifference'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 10:\n";
echo "Sample Output: \"$stringToArray\"\n";
echo " ";
var_dump($array);
echo "\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 11:\n";
echo "Sample Character: '$inputCharacter'\n";
echo " '$nextCharacter'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 12:\n";
echo "Original String: '$originalString'\n";
echo "Insert '$stringToInsert' between 'The' and 'brown'.\n";
echo " '$modifiedString'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 13:\n";
echo "Original String: '$numberString'\n";
echo " '$numberWithoutZeroes'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 14:\n";
echo "Original String: '$originalString'\n";
echo "Remove '$stringToRemove' from the above string.\n";
echo " '$modifiedString'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 15:\n";
echo "Original String: '$originalString'\n";
echo " '$modifiedString'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 16:\n";
echo "Sample Output: '$specialCharactersString'\n";
echo " '$filteredString'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 17:\n";
echo "Sample Output: '$originalString'\n";
echo " '$selectedWords'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 18:\n";
echo "Sample Output: '$numericString'\n";
echo " '$commaRemovedString'\n\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo "Task 19:\n";
echo " '$alphabet'\n";
