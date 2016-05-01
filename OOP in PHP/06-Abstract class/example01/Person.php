<?php
require 'Interfaces.php';
require 'AbstractAge.php';


class Person extends AbstractAge implements PersonInterface
{
    public $name;
    private $age;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}