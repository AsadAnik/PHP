<?php
///Settings Up the Cookies For This one...
$name = "asadanik";
$value = 1000;
$expiration = time() + (60 * 60 * 24 * 7);
setcookie($name, $value, $expiration);

//we can set the value of cookies like that..
$_COOKIE['name'] = $value;
echo $_COOKIE['name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies | PHP</title>
</head>

<body>
    <h1>
        <?php
        echo "I'm the Route of Cookies!";
        ?>
    </h1>
</body>

</html>