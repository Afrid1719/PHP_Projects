<?php

class Person {
    private $firstName;
    private $lastName;
    public $email;

    public function __construct($fname, $lname, $email) {
        $this->firstName = $fname;
        $this->lastName = $lname;
        $this->email = $email;
    }

    public function getFullName() {
        return "$this->firstName $this->lastName";
    }
}

class Engineer extends Person {
    public $professional;
    public $YOE;

    public function __construct($fname, $lname, $email, $professional, $yoe) {
       parent::__construct($fname, $lname, $email);
       $this->professional = $professional;
       $this->YOE = $yoe;
    }
}

$obj = new Engineer("Syed", "Ali", "aliatif908@gmail.com", "Software Engineer", 4.3);
echo $obj->getFullName();