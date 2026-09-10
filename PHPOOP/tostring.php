<?php

    class Person{
        public $name = "Mg Mg";
        public $age = 23;

        public function __toString()
        {
            return "This is Object Data!";   
        }


         public function __invoke()
        {
            return "This is Object! Is not Method";   
        }
    }


    $obj = new Person();

    echo $obj;
    echo $obj();