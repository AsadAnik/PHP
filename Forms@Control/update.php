<?php
///PHP here..
    ///Make Sure the Database Connection..
    include "db_connection.php";

    //get all of the data for loop throw..
    $query_all = "SELECT * FROM `chats_data`";
    $result_data = mysqli_query($connection, $query_all);

    ///checking the query again...
    if(!$result_data){
        die("<h3 class='text-danger mt-5 text-center'>Query ERROR! when startup!</h3>".mysqli_errno($result_data));
    }

    if(isset($_POST['update'])){
        $username = $_POST['username'];
        $title = $_POST['title'];
        $post_data = $_POST['post'];
        $id = $_POST['select'];

        if($username !== '' && $title !== '' && $post_data !== ''){
            $query = "UPDATE `chats_data` SET ";
            $query .= "username =  '$username', ";
            $query .= "title = '$title', ";
            $query .= "post = '$post_data' ";
            $query .= "WHERE id = '$id'";

            ///Lets make Query..
            $update_result = mysqli_query($connection, $query);

            //checking the query for operation...
            if(!$update_result){
                die("<h3 class='text-danger mt-5 text-center'>Query ERROR! When Update Data!</h3>".mysqli_errno($update_result));
            }else{
                echo "<h3 class='text-success mt-5 text-center'>Update Done!</h3>";
            }

        }else{
            echo "<h3 class='text-danger text-center mt-5'>You Can't Update With Empty Field!</h3>";
        }
    }
?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | PHP CRUD</title>

    <!-- Adding the Bootstrap -->
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<!-- Body of this HTML Page -->
<body>
    <div class="container mt-5 mb-5">
        <label>
            <h3 class="display-4">Update PHP Form</h3>
        </label>

        <form action="update.php" method="post" class="form-group">
            <input type="text" placeholder="Username..." name="username" class="form-control">
            <br>
            <input type="text" placeholder="Title..." name="title" class="form-control">
            <br>
            <textarea name="post" id="post" placeholder="Post here..." cols="30" rows="10" class="form-control"></textarea>
            <br>
            <label>Update Anyone's Post</label>
            <select name="select" id="" class="form-control">
                <?php 
                    while($row = mysqli_fetch_assoc($result_data)){
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
            <input type="submit" name="update" value="update" class="form-control btn btn-outline-warning text-uppercase">
        </form>
        
        <label class="mr-5">
            <a href="read.php" class="text-success">Read All Contents</a>
        </label>
        
        <label class="mr-5">
            <a href="create.php">Create Post Now!</a>
        </label>
    </div>
</body>

</html>