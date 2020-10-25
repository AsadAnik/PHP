<?php
///PHP coding here...
//first check the connection with the database...
include "db_connection.php";

///Make Query for Mysqli..
$query = "SELECT * FROM `chats_data`";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("<h3 style='color: red'>There is Problem with Query of MySQLi</h3>" . mysqli_errno($result));
}

// while($row = mysqli_fetch_assoc($result)){
//     print_r($row);
//     echo "<br>";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read | PHP CRUD</title>

    <!-- Adding the Bootstrap -->
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5 mb-5">
        <label>
            <h3 class="display-4">Read Form PHP</h3>
        </label>

        <ul class="list-group">
            <?php ///make Every Data from Database as Good View Format...
            while ($row = mysqli_fetch_assoc($result)) {
                $username = $row['username'];
                $title = $row['title'];
                $post = $row['post'];
            ?>
                <li class="list-group-item">
                    <p>
                        Username: <?php print_r($username); ?>
                    </p>

                    <p>
                        Title: <?php print_r($title); ?>
                    </p>

                    <p>
                        Post: <?php print_r($post); ?>
                    </p>
                </li>
                <br>
            <?php
            }
            ?>
        </ul>

        <label class="mr-5">
            <a href="create.php">You Also Wanna Make Post?</a>
        </label>

        <label class="mr-5">
            <a href="update.php" class="text-warning">Need Someones Topic To Update!</a>
        </label>

        <label>
            <a href="delete.php" class="text-danger">Remove Any Of Posts!</a>
        </label>
    </div>
</body>

</html>