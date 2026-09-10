<?php

    class Person {
        public $name = "Kyaw Kyaw";
        public function hobby($hobby) {
            echo "I Like " . $hobby;
        }

        public function __construct(){
            echo "This is consturct Method!";
        }
    }


    class SalePerson extends Person {
        public $name = "Aung Aung";

        public function __construct(){
            parent::__construct();
            echo "This is second construct Method!";
        }

    }


    $obj = new SalePerson();