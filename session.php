<?php
///THe PHP with Session...
//starting the session now..
session_start();

//Add Value in session..
$set_session_value = $_SESSION['welcome'] = "Hello Session World!";
echo $set_session_value;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session | PHP</title>
</head>

<body>

</body>

</html>