<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'conaction.php';
    include 'function.php';
    update();
    delete();
    ?>
    <form action="loginupdate.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">username</label>
            <input type="username" class="form-control" name="username" id="exampleInputusername" aria-describedby="usernameHelp">
            <div id="usernameHelp" class="form-text">We'll never share your username with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="mb-3">

            <select name="id" id="id">
                <?php
                showData()
                ?>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" value="Submit" name="update">update </button>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" value="Submit" name="deleteRows">delete </button>
        </div>
    </form>



</body>

</html>