<?php

include("Person.php");

$person1 = new Person('John Doe');
$person2 = new Person('Jane Doe');

// note that setName method declared as 'private' so it's inaccessible from outside the class.
// $person1->setName('Ehsan'); // Fatal error: Call to private method Person::setName( )

echo Person::$count;          // 57

echo "<br>";
echo $person1->readSocial();  // A0094

echo "<br>";
// echo $person1->social_number; // Fatal error: Cannot access private property Person::$social_number

echo "<br>";
echo $person2::$count;        // 57