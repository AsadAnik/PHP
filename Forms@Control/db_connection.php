<?php
    ///Make Connecction with PHP and the MySqli Database...
    $connection = mysqli_connect('localhost', 'root', '', 'ichat');

    //Checking the Database Connection...
    if(!$connection){
        die("<h3 style='color: red'>Database Connection ERROR!!</h3>".mysqli_errno($connection));
    }
?>