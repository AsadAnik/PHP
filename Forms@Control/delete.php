<?php
///PHP code here...
//Make Connection with Database..
include "db_connection.php";

//Make query for fetching data from database...
$query = "SELECT * FROM `chats_data`";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("<h3 class='text-danger mt-5'>ERROR! with query all data,  </h3>" . mysqli_errno($result));
}

?>

<!-- HTMl here -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete | PHP CRUD</title>

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
            <h3 class="display-4">Delete PHP Form</h3>
        </label>
        <form action="delete.php" method="post" class="form-group">
            <select name="option_select" class="form-control">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $username = $row['username'];
                    $title = $row['title'];
                ?>
                    <option value="<?php echo $id;?>">
                        <span>[<?php echo $id;?>]</span>
                        <span><?php echo $username;?></span>
                        <span>(<?php echo $title;?>)</span>
                    </option>
                <?php
                }
                ?>
            </select>
            <br>
            <input type="submit" name="delete_press" value="delete" class="form-control btn btn-danger text-uppercase">
        </form>

        <label>
            <a href="read.php" class="text-success">Read All Contents!</a>
        </label>
    </div>
</body>

</html>