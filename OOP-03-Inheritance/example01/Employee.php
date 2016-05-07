<?php

Class Employee extends Person
{
    private $salary = 5000;

    public function __construct($newName)
    {
        parent::__construct($newName);
        echo "New employee has been created." . "<br>";
        parent::setAge(32);   // overwrite the age value which was 20

    }

    public function getSalary(){
        return $this->salary;
    }
}