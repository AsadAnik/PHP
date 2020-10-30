<?php
///PHP OOP with Inheritence...
    class Car{
        //Some Access Modifier Properties..
        public $name = 'Lembo';
        protected $gass = '120ml';
        private $key = '@@1211';

        //Some Methods..
        //Need Method to Access Protected/Private Properties..
        function view_gass(){
            return $this->gass;
        }
        //Private Properties..
        function view_key(){
            return $this->key;
        }

        //working with Private Properties..
        function press_power_btn($driver_key){
            if($driver_key !== $this->key){
                return 'Wrong Key!';
            }
            return 'Car Started Successfully!';
        }

    }

    ///Creating Instance of Class..
    $our_car = new Car();

    //Can Access from Access Modifier..
    echo $our_car->name ."<br>";
    echo $our_car->view_gass() ."<br>";

    //Can't access private properties Directly..
    echo $our_car->view_key() ."<br>";

    //Try to start the Car..
    $starting = $our_car->press_power_btn('@@1211');
    echo $starting ."<br>";

    //-----------Break-line--------//
    echo "<br>";

    ///lets try with Inherit Class..
    class AnotherCar extends Car{
        //Class Body..
        //Inherited From Super Class Car..
    }

    //Make Instance...
    $another_car = new AnotherCar();

    //Check Inherited Properties..
    $name = $another_car->name;
    $gass = $another_car->view_gass();
    $key = $another_car->view_key();

    echo $name ."<br>";
    echo $gass ."<br>";
    echo $key ."<br>";

    //Checking Inherited Methods..
    $starting_another = $another_car->press_power_btn('$%902');

    echo $starting_another ."<br>";

?>