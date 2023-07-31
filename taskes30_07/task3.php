<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <form action="task3.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
     <?php echo $_POST['name'] ; ?>
</body>
</html>