<?php
///The Basic OOP programming in PHP...
    class Car{
        //Class Properties..
        var $car_name = 'Ferrari';
        var $car_model = 'F-12';
        var $car_engine = 1200;

        //Setter Method..
        function set_engine_power($after_drive){
            $this->car_engine = $this->car_engine - $after_drive;
        }

        //Getter Method..
        function get_engine_power(){
            return $this->car_engine;
        }
    }

    //Create Instance of Class..
    $my_car = new Car();

    //Get the Car Name..
    echo $my_car->car_name."<br>";

    //See the Car Model..
    echo $my_car->car_model."<br>";

    //Setting the Method inner from class..
    $my_car->set_engine_power(1000);

    //Get from Getter Method of Class..
    $after_long_drive = $my_car->get_engine_power();
    echo $after_long_drive;

?>