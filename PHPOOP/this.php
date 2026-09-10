<?php

    class Person{
        public $name = "Kyaw Kyaw";
        public $age = 23;
        public function changeName($rename) {
           $this->name = $rename; 
        }
    }


    $obj = new Person();
    echo $obj->name;
    echo "<br>";

    $obj->changeName("My Mya");
    echo "<br>";

    echo $obj->name;