<?php
    ///Php checking the Class existing...
    class Car{};

    //Checking Existing Class..
    if(class_exists("Car")){
        echo "Yes, Car Class is Existed!";
    }else{
        echo "No, Car Class Not Existed!";
    }
?>