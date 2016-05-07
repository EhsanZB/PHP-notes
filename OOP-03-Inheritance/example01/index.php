<?php

include 'Person.php';
include 'Employee.php';

$employee1 = new Employee('John Doe');

echo $employee1->getName();

echo "<br>";
echo $employee1->getSalary();

echo "<br>";
// echo $employee1->setAge('123');   // Fatal error: Call to protected method Person::setAge();

echo "<br>";
echo $employee1->getAge();   // 32


