<?php 
    ///Php checking the Method Existing...
    class Car{
        function CarSpeed(){
            echo "Speed about 120kmph!";
        }
    }

    ///Php checking Inner Class Methods...
    if(method_exists("Car", "CarSpeed")){
        echo "Yes, CarSpeed Method Existed!";
    }else{
        echo "NO, CarSpeed Method Not Existed!";
    }
?>