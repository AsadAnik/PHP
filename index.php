<!-- PHP Here -->
<?php
if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user !== '' && $pass !== '') {
        echo "Data Gotted Successfully Done! <br>";

        //lets connect with database and do some work with mysqli...
        $connection_db = mysqli_connect('localhost', 'root', '', 'users_db');

        ///checkup the Database connection..
        if (!$connection_db) {
            die("There are error with connection <br>" . mysqli_connect_error());
        } else {
            echo "Connected Successfully Done! <br>";

            ///lets do some security code with username & password...
            $user = mysqli_real_escape_string($connection_db, $user);
            $pass = mysqli_real_escape_string($connection_db, $pass);

            ///lets some security with password make curreption for safe from attakers...

            //                $hash_format = "#@@#@@";
            //                $salt = "iamNotVeryMuchStrongerThenOther!63";

            $hash_format = "$2y$10$";
            $salt = "iusesomecrazystrings22";

            $hash_F_and_salt = $hash_format . $salt;
            $pass = crypt($pass, $hash_F_and_salt);

            ///making query...
            $query = "INSERT INTO users(username, password) ";
            $query .= "VALUES('$user', '$pass')";

            $result = mysqli_query($connection_db, $query);

            ///checkup the query result...
            if (!$result) {
                die("Query ERR!!!. <br>" . mysqli_error($connection_db));
            } else {
                echo "Your Data Added On Database Successfully Done! <br>";
            }
        }
    } else {
        echo "Please Insert The Values On Input area!!! <br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Form | PHP_MySQL</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
</head>

<body>
    <form action="index.php" method="post" class="m-5 form-group">
        <input type="text" placeholder="Username" name="username" class="form-control">
        <br>
        <input type="password" placeholder="Password" name="password" class="form-control">
        <br>
        <input type="submit" name="submit" value="Login" class="form-control btn btn-outline-primary text-uppercase">
    </form>

    <h1>
        <?php
        $id = 20;
        $username = "asadanik@";
        print_r($_GET['username']);
        ?>
    </h1>

    <a href="index.php?id=<?php echo $id; ?>&username=<?php echo $username; ?>">Try On PHP GET Method!!!</a>

    <a href="index.php?id=<?php echo $username; ?>&username=<?php echo $id; ?>">Try With reverse idea of this!</a>
</body>

<!-- JavaScript Bundle with Popper.js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

</html>