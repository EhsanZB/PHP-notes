<?php


class Person
{
    public $name;
    protected $age;

    public function __construct($defaultName){
        echo "new person '$defaultName' has been created!" . "<br>";
        $this->name = $defaultName;
        $this->age = 20;
    }

    protected function setName($name){
        $this->name = $name;
    }

    protected function setAge($age){
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

}