<?php

    class Person{
        public $name = "Kyaw Zin Aung";
        public function eat() {
            echo "I want to eat Fired Chicken!";
        } 
    }


    // object
    $obj = new Person();
    $obj1 = new Person();


    // string data 
    echo $obj->name;
    echo "<br>";
    echo $obj->eat();


    

