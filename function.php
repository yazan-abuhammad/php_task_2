<?php
include 'conaction.php';

function showData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option> ";
    }
}


function update()
{
    global $connection;
    if (isset($_POST['update'])); {
        $username = isset($_POST['username']) ? $_POST['username'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";
        $id = isset($_POST['id']) ? $_POST['id'] : "";


        $query = "UPDATE users SET name ='$username', password ='$password' WHERE id =$id";


        mysqli_query($connection, $query);
    }
}
function delete()
{
    global $connection;
    if (isset($_POST['deleteRows'])); {

        $id = isset($_POST['id']) ? $_POST['id'] : "";


        $query = "DELETE FROM users WHERE id =$id";


        mysqli_query($connection, $query);
    }
}
