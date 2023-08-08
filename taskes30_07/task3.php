<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <form action="task3.php" method="post">
        <label for="name">name</label>
        <input type="text" placeholder="enter your name" id="name" name="name">
        <br>
        <label for="password">password</label>
        <input type="password" placeholder="enter your name" id="password" name="password">
        <br>
        <button type="submit" name="submit"> submit</button>
        <?php
        if (isset($_POST['submit']))
            echo '<br>';

        echo $_POST['name'] . '<br>';

        echo $_POST['password']; ?>
</body>

</html>