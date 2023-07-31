<?php
$numeric_string = '085119';

// Extract hours, minutes, and seconds from the numeric string
$hours = substr($numeric_string, 0, 2);
$minutes = substr($numeric_string, 2, 2);
$seconds = substr($numeric_string, 4, 2);

// Format the time string
$time_string = $hours . ':' . $minutes . ':' . $seconds;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Convert Numeric String to Time Format</title>
</head>
<body>
    <h2>Converted Time Format</h2>
    <p>Sample Output: '<?php echo $numeric_string; ?>'</p>
    <p>Expected Output: <?php echo $time_string; ?></p>
</body>
</html>
