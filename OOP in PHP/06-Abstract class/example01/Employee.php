<?php


Class Employee extends Person implements EmployeeInterface
{
    private $salary = 5000;

    public function getSalary(){
        return $this->salary;
    }
}