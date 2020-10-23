<?php
//The Post and Get Method working with PHP...
$username = 'asadanik';
$pasword = '@170977@';

//Controlled The POST_Method from here..
if (isset($_POST['submit'])) {
    if ($_POST['postData'] !== '') {
        $post_data = $_POST['postData'];
        $username = $post_data;
        echo "<h1 style='color: green'>New Data Posted Lets Check Request!</h1>";
    } else {
        echo "<h1 style='color: red'>Please Insert The Value!</h1>";
    }
}
?>

<!---------- HTML | PHP ----------->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST & GET | PHP</title>
</head>

<body>
    <header style="text-align: center">
        <!-- Send the URi Data as id and password for GET request.. -->
        <a href="post_get.php?id=<?php echo $username; ?>&password=<?php echo $pasword; ?>">Get The Request</a>
        <br> <br>

        <!-- Working for the POST_Method... -->
        <form action="post_get.php" method="post">
            <input type="text" placeholder="POst Your Data.." name="postData">
            <input type="submit" name="submit" value="POST">
        </form>
    </header>
    <br>
    <hr>

    <!-- Get Method Works like that -->
    <section style="text-align: center">
        <h1>The Get Requiests All are here</h1>

        <!-- Get the Whole URi Requests result with GET_Method.. -->
        <h3>
            <?php
            print_r($_GET);
            ?>
        </h3>

        <!-- Get The Request with specific items -->
        <h4>username: <?php echo $_GET['id']; ?></h4>
        <h4>password: <?php echo $_GET['password']; ?></h4>
    </section>
</body>

</html>