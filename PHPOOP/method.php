<?php

    // class Person{
    //     public $name = "Kyaw Kyaw";
    //     public $age = 23;
    //     public function eat($shop) {
    //         echo "I want to eat Fired Chicken from " . $shop;
    //     }
    // }

    // $obj = new Person();
    // echo $obj->name;
    // echo "<br>";
    // echo $obj->eat("Hlae Dan");

    class Person{
        public $name = "Kyaw Kyaw";
        public $age = 23;
        public function eat($shop = "Inlya Lake") {
            echo $this->name. " I want to eat Fired Chicken from " . $shop;
        }
    }

    $obj = new Person();
    echo $obj->name;
    echo "<br>";
    echo $obj->eat();
