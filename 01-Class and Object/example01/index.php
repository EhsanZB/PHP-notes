<?php

/*
 PHP notes - OOP (Class and Object)
 Compiled by: Ehsan
 Github: github.com/EhsanZB
*/

include("Person.php");

// instantiate objects (creating instances (objects, e.g: $person1 and $person2) of a class)
$person1 = new Person('John Doe');
$person2 = new Person('Jane Doe');

echo "<br>";

// note that name property has been set to default name by the constructor function
echo $person1->getName() . "<br>";
echo $person2->getName() . "<br>";


$person1->setName('Ehsan');
$person2->setName('Alex');

echo "<br>";

echo "Accessing to properties using getter: " . "<br>";
echo $person1->getName() . "<br>";
echo $person2->getName() . "<br>";

echo "<br>";

// Directly accessing properties (which is not the best practice and not a good idea!)
// Note that the class property is set to public, so we can access it from outside the class.
echo "Direct accessing to properties: " . "<br>";
echo $person1->name . "<br>";
echo $person2->name . "<br>";

echo "<br>";

$person3 = new Person('Foo bar');

echo $person3->name . "<br>";


