<?php
///PHP...
    //Make connection with database...
   include "db_connection.php";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $title = $_POST['title'];
        $post = $_POST['post'];

        ///Checking Empty Value Or Not...
        if($username !== '' && $title !== '' && $post !== ''){
                ///If Database Is Connected So Doing the main lot of works togather..
                ///Now Inserting the Data into Database...
                $query = "INSERT INTO chats_data(username, title, post) ";
                $query .= "VALUES('$username', '$title', '$post')";
                $result = mysqli_query($connection, $query);

                //Checking the Query...
                if(!$result){
                    die("<h2 class='text-danger text-center mt-5'>Database Query ERROR!!</h2>" . mysqli_errno($result));
                }else{
                    echo "<h2 class='text-success text-center mt-5'>Successfully Created Post!</h2>";
                }

        }else{
            echo "<h2 class='text-danger text-center mt-5'>Please Insert All Values!</h2>";
        }
    }
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create | PHP CRUD</title>

    <!-- Adding the Bootstrap -->
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div id="form" class="container mt-5 mb-5">
        <label>
            <h3 class="display-4">Create PHP Form</h3>
        </label>

        <form action="create.php" method="post" class="form-group">
            <input type="text" placeholder="Username" name="username" class="form-control">
            <br>
            <input type="text" placeholder="Title" name="title" class="form-control">
            <br>
            <textarea name="post" id="post" cols="30" rows="10" placeholder="Post here.." class="form-control"></textarea>
            <br>

            <input type="submit" name="submit" value="Create" class="form-control btn btn-outline-primary text-uppercase">
        </form>

        <label>
            <a href="read.php" class="text-success">See All Connections</a>
        </label>
    </div>
</body>

</html>