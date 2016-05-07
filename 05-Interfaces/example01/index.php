<?php

include 'Person.php';
include 'Employee.php';

$person1 = new Person();
$person1->setName('John Doe');

echo $person1->getName();


echo "<br>";
$employee1 = new Employee();

echo "<br>";
echo $employee1->getSalary();