<?php

include 'Person.php';
include 'Employee.php';

$person1 = new Person();
$person1->setName('John Doe');

echo $person1->getName();

$person1->setAge(30);

echo "<br>";
$person1->printAge();


$employee1 = new Employee();
$employee1->setName('Jane Doe');
$employee1->setAge(25);

echo "<br>";
echo $employee1->getName();

echo "<br>";
$employee1->printAge();

