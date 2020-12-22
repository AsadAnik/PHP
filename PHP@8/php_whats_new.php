<?php 
///Code...
    ///1. Named Arguments ------->
    function say_fullname(string $name, int $age){
        // return `I'm ${$name}, and I'm ${$age} \n`;
        echo $name." is ".$age." years old! \n";
    }

    say_fullname(age: 20, name: "Asad Anik");



    ///2. Optional Arguments ------->
    function another_person(string $name, int $age, ? string $gender = "Female"){
        echo "Another One is ".$name.", ".$age." years old (".$gender.") \n";
    }

    another_person(gender: "Male" ,name: "Semuel Johnson", age: 23);



    ///3. Constructor property promotion ------>
    class Person{
        public function __construct(
            public string $name,
            public int $age,
            public float $salary,
        ){}

        public function __toString(){
            return $this->name." - ".$this->salary."\n";
        }
    }

    $person = new Person("John Doe", 45, 123.31);
    echo $person;



    ///4. Union Types --------->
    function testing_types(int | float $salary){
        echo "Salary is: ".$salary."\n";
    }

    testing_types(1200);
    testing_types(12.3242);



    ///5. Match Expression -------->
    $day = '';
    $peek_day = match($day){
        'Saturday' => strtoupper("Week starts"),
        'Sunday' => strtolower("2nd Weak here"),
        '' => strtoupper("Empty!!!"),
        default => 'Unknown day status: '.$day,
    };

    echo $peek_day."\n";



    ///6. Null Safe Operator --------->
    class User{
        public function __construct(
            public string $name,
            public Address | null $address
        ){}

        public function __toString(){
            return $this->name;
        }
    }

    class Address{
        public function __construct(
            public string $street,
            public string $city,
            public string $country
        ){}
    }

    class Session{
        public function __construct(
            public string $id,
            public User $user
        ){}
    }

    $session1 = new Session("ses1", new User("Fatema", null));
    $session2 = new Session("ses2", new User("Asad", new Address("Midway", "Wombledon", "U.K")));

    //Old Way..
    $country = null;
    if ($session2 !== null){
        $user = $session2->user;
        if ($user !== null){
            $address = $user->address;
            if ($address !== null){ 
                $country = $address->country;
            }
        }
    }
    echo $country."\n";

    //New Way Now..
    $country = $session2?->user?->address?->country;
    echo $country."\n";



    
    ///7. Saner String to Number Comparison ----->
    echo (0 == "Test")."\n";



    ///8. Consistent Type Errors for Internal Functions ---->
    // strlen([]);



    ///9. Non Capturing Catches ----->
    try{
        throw new Exception('Exception');

    }catch(Exception){
        echo "ERROR occured!! \n";
    }



    ///10. Throw is an Expression ----->
    try {
        $result = $session2?->user?->address?->country ?? throw new Exception("Null Pointer Exception!");
        echo "Result Found: ".$result."\n";

    } catch(Exception) {
        echo "ERROR occured into throw Expression!! \n";
    }

?> 