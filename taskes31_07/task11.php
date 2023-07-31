<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>
</head>
<body>
    <h2>String Manipulation</h2>
    <form action="task11.php" method="post">
        <label for="user_input">Enter a string:</label>
        <input type="text" name="user_input" id="user_input" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $user_input = $_POST['user_input'];

      
        $uppercase_string = strtoupper($user_input);

        
        $lowercase_string = strtolower($user_input);

        
        $ucfirst_string = ucfirst($user_input);

        
        $capitalize_words = ucwords($user_input);
    }
    ?>

    <?php if (isset($user_input)): ?>
        <h3>Original String: <?php echo $user_input; ?></h3>
        <p>Uppercase: <?php echo $uppercase_string; ?></p>
        <p>Lowercase: <?php echo $lowercase_string; ?></p>
        <p>First Letter Uppercase: <?php echo $ucfirst_string; ?></p>
        <p>First Letter of Each Word Capitalized: <?php echo $capitalize_words; ?></p>
    <?php endif; ?>
</body>
</html>