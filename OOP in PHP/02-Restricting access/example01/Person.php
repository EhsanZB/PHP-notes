<?php


class Person
{
    public $name;
    private $social_number;
    static $count = 57;

    public function __construct($defaultName){
        echo "new person '$defaultName' has been created!" . "<br>";
        $this->name = $defaultName;
        $this->social_number = 'A0094';
    }

    private function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function readSocial(){
        return $this->social_number;
    }
}